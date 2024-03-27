<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<style>
      .card {
    position: relative;
    overflow: hidden; /* Ensure text doesn't overflow outside the card */
  }

  .headImage {
    position: relative; /* Ensure the image is positioned relative to the card */
  }

  .card-img-overlay {
    position: absolute;
    top: 50%; /* Position the text at the center vertically */
    left: 50%; /* Position the text at the center horizontally */
    transform: translate(-50%, -50%); /* Center the text properly */
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 20px; /* Add some padding for readability */
    max-width: 80%; /* Limit the width of the text container */
    text-align: center; /* Center-align the text */
  }

  .card-title,
  .card-text {
    margin-bottom: 0; /* Remove default bottom margin */
  }
</style>
<link rel="stylesheet" href="assets/css/custom.css">

<body>
    
    
<div class="card bg-transparent border-0 headImage">
  <img src="assets/images/BG.png" class="card-img headPic" alt="...">
  <div class="card-img-overlay">
    <h4 class="card-title" style="color: white;"><b>About Us</b></h4>
    <p class="card-text" style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
</div>
</div>
    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                    <div class="row gy-3">
                    <div class="articles">ARTICLES</div>
                        <?php
                        
                        $query = "SELECT * FROM students";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            <div class="col-md-4 mb-4 gy-4">
                            <div class="card bg-transparent border-0 p-3 FmarginCard">
                                <img src="assets/images/images.jpg" class="card-img articleImage" alt="...">
                                <div class="card-img-overlay">
                                   
                                </div>
                                </div>
                                  
                            </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                    
                    
                    
                </div>
                
                <div class="secondContent" >
                    
                    <div class="row gy-3">
                    <div class="projects">PROJECTS</div>
                        <?php
                        
                        $query = "SELECT * FROM students";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            <div class="col-md-4 mb-4 gy-4">
                            <div class="card bg-transparent border-0 p-3 marginCard">
                                <img src="assets/images/images.jpg" class="card-img articleImage" alt="...">
                                <div class="card-img-overlay">
                                   
                                </div>
                                </div>
                                  
                            </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                  
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>
