<?php
//Folder to store files on Local Server
$target_folder = "uploads/";

// Database configuration    
define('DB_HOST', 'localhost:3306'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'slp'); 

//Google API Configuration
define('GOOGLE_CLIENT_ID', '688794310095-lcpd263sfkvfqefop0f6j25oav1a4bng.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive');
define('REDIRECT_URI','http://localhost/slp/admin/google_drive_sync.php');

// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 

//Start SESSION
if(!session_id()){
    session_start();
}
?>

