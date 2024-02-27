<?php 
 
// Include and initialize Google Drive API handler class 
include_once 'GoogleDriveApi.class.php'; 
$GoogleDriveApi = new GoogleDriveApi(); 
     
// Include database configuration file 
require_once 'dbConfig.php'; 
 
$statusMsg = $valErr = $access_token = ''; 
$status = 'danger'; 
 
$redirectURL = 'index.php'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 
    // Validate form input fields 
    if(empty($_POST["file_id"])){ 
        $valErr .= 'Please enter ID of Google Drive file.'; 
    } 
     
    // Check whether user inputs are empty 
    if(empty($valErr)){ 
        $drive_file_id = $_POST["file_id"]; 
         
        // Store reference ID of file in SESSION 
        $_SESSION['last_file_id'] = $drive_file_id; 
         
        // Get the access token 
        if(!empty($_SESSION['google_access_token'])){ 
            $access_token = $_SESSION['google_access_token']; 
        }else{ 
            // Redirect to the Google authentication site 
            header("Location: $googleOauthURL"); 
            exit(); 
        } 
    }else{ 
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    } 
}elseif(isset($_GET['code'])){ 
    // Get file reference ID from SESSION 
    $drive_file_id = $_SESSION['last_file_id']; 
 
    if(!empty($drive_file_id)){ 
        // Get the access token 
        if(!empty($_SESSION['google_access_token'])){ 
            $access_token = $_SESSION['google_access_token']; 
        }else{ 
            $data = $GoogleDriveApi->GetAccessToken(GOOGLE_CLIENT_ID, REDIRECT_URI, GOOGLE_CLIENT_SECRET, $_GET['code']); 
            $access_token = $data['access_token']; 
            $_SESSION['google_access_token'] = $access_token; 
        } 
    }else{ 
        $statusMsg = 'File reference not found!'; 
    } 
}else{ 
    $statusMsg = 'Unauthorized access!'; 
} 
 
if(!empty($access_token)){ 
    // Fetch file metadata from Google drive 
    try { 
        $drive_file_data = $GoogleDriveApi->GetFileMeta($access_token, $drive_file_id, $googleOauthURL); 
    } catch(Exception $e) { 
        $api_error = $e->getMessage(); 
    } 
     
    if(!empty($drive_file_data) && empty($api_error)){ 
        // File information 
        $drive_file_id = $drive_file_data['id']; 
        $drive_file_name = $drive_file_data['name']; 
        $drive_file_mime_type = $drive_file_data['mimeType']; 
         
        // File save path 
        $target_file = $target_folder.'/'.$drive_file_data['name']; 
         
        // Fetch file content from Google drive 
        try { 
            $drive_file_content = $GoogleDriveApi->GetFileMediaContent($access_token, $drive_file_id, $googleOauthURL); 
        } catch(Exception $e) { 
            $api_error = $e->getMessage(); 
        } 
         
        if(!empty($drive_file_content) && empty($api_error)){ 
            // Save base64 encoded content as file on the server 
            file_put_contents($target_file, $drive_file_content); 
             
            // Insert file info in the database 
            $sqlQ = "INSERT INTO drive_files (google_drive_file_id, file_name, mime_type, created) VALUES (?,?,?,NOW())"; 
            $stmt = $db->prepare($sqlQ); 
            $stmt->bind_param("sss", $db_drive_file_id, $db_drive_file_name, $db_drive_file_mime_type); 
            $db_drive_file_id = $drive_file_id; 
            $db_drive_file_name = $drive_file_name; 
            $db_drive_file_mime_type = $drive_file_mime_type; 
            $insert = $stmt->execute(); 
             
            if($insert){ 
                $file_id = $stmt->insert_id; 
            } 
             
            $status = 'success';  
            $statusMsg = 'The file is downloaded from Google Drive and saved on the server successfully!'; 
             
            $redirectURL = 'details.php?fid='.$file_id; 
             
            unset($_SESSION['last_file_id']); 
        }else{ 
            $statusMsg = 'File not found : '.$api_error;    
        } 
    }else{ 
        $statusMsg = 'File metadata not found : '.$api_error; 
    } 
}else{ 
    unset($_SESSION['google_access_token']); 
    $statusMsg = !empty($statusMsg)?$statusMsg:'Failed to fetch access token! Click to <a href="'.$googleOauthURL.'">authenticate with Google Drive</a>'; 
} 
 
$_SESSION['status_response'] = array('status' => $status, 'status_msg' => $statusMsg); 
 
header("Location: $redirectURL"); 
exit(); 
 
?>