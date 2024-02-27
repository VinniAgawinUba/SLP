<?php 
// Include configuration file 
include_once 'dbConfig.php'; 
 
if(!empty($_GET['fid'])){ 
    // Fetch file details from the database 
    $sqlQ = "SELECT * FROM drive_files WHERE id = ?"; 
    $stmt = $db->prepare($sqlQ);  
    $stmt->bind_param("i", $db_file_id); 
    $db_file_id = $_GET['fid']; 
    $stmt->execute(); 
    $result = $stmt->get_result(); 
    $fileData = $result->fetch_assoc(); 
     
    if(!empty($fileData)){ 
        $google_drive_file_id = $fileData['google_drive_file_id']; 
        $file_name = $fileData['file_name']; 
        $mime_type = $fileData['mime_type']; 
         
        $file_path_server = $target_folder.'/'.$file_name; 
        $file_path_drive = 'https://drive.google.com/open?id='.$google_drive_file_id; 
    } 
}else{ 
    header("Location: index.php"); 
    exit(); 
} 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
     
    unset($_SESSION['status_response']); 
} 
?>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<?php if(!empty($fileData)){ ?>
<div class="card">
    <div class="card-body">
        <p class="card-text"><b>File Name:</b> <?php echo $file_name; ?></p>
        <p class="card-text"><b>File ID:</b> <?php echo $google_drive_file_id; ?></p>
        <p class="card-text"><b>Mime Type:</b> <?php echo $mime_type; ?></p>
        <p><b>Google Drive File URL:</b> <a href="<?php echo $file_path_drive; ?>" target="_blank"><?php echo $file_path_drive; ?></a></p>
    </div>
    <a href="index.php" class="btn btn-primary">Back to Home</a>
</div>
<?php } ?>