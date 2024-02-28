<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">

    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3">

            <!-- Main Body -->
            <div class="col-3">
            </div>
            <div class="col-6">
            <h4 class="card-title text-center customHome">Gallery</h4>
            </div>
            <div class="col-3"></div>
            <div class="mainContent">
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM posts";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            <div class="col-md-4 mb-4 gy-3" style="display: flex; justify-content: center;">
                            <a href="#"><img src="assets/images/vccineCrd.jpg" class="galleryImage" style="position: relative; width: 100%; height: 390px; object-fit: contain; transform: rotate(-90deg); border-radius: 10%;"></a> <!-- Placeholder for image-->
                            <div class="projectTitle">bro</div>
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
