<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">

<div class="card bg-transparent border-0 headImage">
  <img src="assets/images/images.jpg" class="card-img headPic" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
          
            <div class="projects">PROJECTS</div>
                    <div class="row">
                    <div class="articles">ARTICLES</div>
                        <?php
                        $query = "SELECT * FROM posts";
                        $query = "SELECT * FROM posts";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            
                            
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

<!-- Footer -->
<?php include('includes/footer.php'); ?>
