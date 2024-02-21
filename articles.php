<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">

    <div class="container-fluid custombg-image-row">
        <div class="row gy-3">
            
    
            <!-- Main Body -->
            <div class="col-3">
            </div>
            <div class="col-6">
            <h4 class="card-title text-center customHome">Articles</h4>
            </div>
            <div class="col-3">
            </div>
            
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
                            <div class="col-md-3 mb-3 gy-3">
                                <div class="card h-100" style="width: 20rem; margin-left: 2vw;">
                                <a href="#"><img src="assets/images/vccineCrd.jpg" class="customPic"></a> <!-- Placeholder for image-->
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $item['id']; ?></h5>
                                        <p class="card-text"><?= $item['name']; ?></p>
                                        <!-- You can add more project details here -->
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

<!-- Footer -->
<?php include('includes/footer.php'); ?>
