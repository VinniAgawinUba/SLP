<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3" style="width:350px; position: fixed;">
            <?php include('includes/sidebar.php'); ?>
        </div>

        <!-- Main Body -->
        <div class="col-md-9 offset-md-3" style="margin-left: 350px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include('message.php'); ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Gallery</h4>
                            </div>
                            <div>
                                <!-- FETCH FROM DATABASE -->
                                <?php
                                $navbarCategory = "SELECT * FROM gallery WHERE navbar_status ='0' AND status='0'";
                                $navbarCategory_run = mysqli_query($con, $navbarCategory);
                                if(mysqli_num_rows($navbarCategory_run) > 0)
                                {
                                    foreach($navbarCategory_run as $navItems)
                                    {
                                    ?>
                                    <ul class="nav-item">
                                        <a class="nav-item" href="category.php?title=<?=$navItems['slug'];?>"><?=$navItems['name'];?></a>
                                    </ul>
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
</div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
