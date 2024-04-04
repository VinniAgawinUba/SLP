<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>

<link rel="stylesheet" href="assets/css/custom.css">
<body>
    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3">
            <h1 class="gallery">Gallery</h1>
            <!-- Main Body -->
           
            <div class="mainContent">
                    <div class="row gy-3">
                        <?php
                        $query = "SELECT * FROM gallery";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            <div class="">
                            <div class="card bg-transparent border-0 ">
                                <img src="assets/images/article-pic.png" class="card-img galleryImage" alt="...">
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
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>
