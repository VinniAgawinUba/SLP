<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">
<body>
    <div class="container-fluid custombg-image-row">
        <div class="row gy-3" >
        <h1 class="articlePage">Articles</h1>
        <div class="articleLine"></div>
        
            <!-- Main Body -->
            
            <div class="">
                
                    <div class="row" >
                        <?php
                        $query = "SELECT * FROM posts";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $item)
                            {
                            ?>
                            <div class="col-md-4 mb-3 gy-3" style="display: flex; justify-content: center; ">
                                <div class="card h-100" style="width: 15rem;">
                                <a href="#"><img src="assets/images/vccineCrd.jpg" class="customPic"></a> <!-- Placeholder for image-->
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $item['name']; ?></h5>
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
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>
