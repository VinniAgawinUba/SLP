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
                            <div class="card bg-transparent border-0 articleImage">
                                <img src="assets/images/images.jpg" class="card-img " alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">g</h5>
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

<!-- Footer -->
<?php include('includes/footer.php'); ?>
