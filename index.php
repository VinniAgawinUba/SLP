<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">
<div class="headImage"><img src="assets/images/images.jpg" class="headPic"></div>
    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3" style="display: flex; justify-content: center;">
            <!-- Main Body -->
            <div class="mainContent">
                    <div class="row">
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
                        <div class="articles">ARTICLES</div>
                        <div class="projects">PROJECTS</div>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
