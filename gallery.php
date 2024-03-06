<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">
    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3" style="display: flex; justify-content: center;">

            <!-- Main Body -->
            <div class="col-3">
            </div>
            <div class="col-6">
            <h4 class="card-title text-center customHome">Gallery</h4>
            </div>
            <div class="col-3"></div>
            <div class="mainContent">
                    <div class="row gy-3">
                        <?php
                        $query = "SELECT * FROM posts";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            <div class="col-md-4 mb-4 gy-4">
                            <div class="card bg-transparent border-0 ">
                                <img src="assets/images/images.jpg" class="card-img galleryImage" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title projectTitle"><?= $item['name']; ?></h5>
                                </div>
                                </div>
                                <div class="hr1"></div>    
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

<!-- Footer -->
<?php include('includes/footer.php'); ?>
