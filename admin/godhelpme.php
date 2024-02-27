<?php
//Include configuration file
include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download File From Google Drive using PHP by CodexWorld</title>

  <!-- Bootstrap Libarary -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body>
<div class="wrapper">
  <div class="col-md-12">
    <form method="POST" action="google_drive_sync.php"class="form">
      <div class="form-group">
        <label>Drive File ID:</label>
        <input type="text" name="file_id" class="form-control" placeholder="Enter Google Drive File ID">
      </div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="Download">
      </div>

    </form>
  </div>
</div>
  
</body>
</html>