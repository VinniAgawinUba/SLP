<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 fixed-left" style="width:350px">
                <?php include('includes/sidebar.php'); ?>
            </div>

            <!-- Main Body -->
            <div class="col-md-9 ">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <?php include('message.php'); ?>
                                <div class="card-header">
                                    <h4 class="card-title text-center customHome">Articles</h4>
                                </div>
                                <div>
                                    <!-- FETCH FROM DATABASE -->
                                    <?php
                                    $navbarCategory = "SELECT * FROM posts";
                                    $navbarCategory_run = mysqli_query($con, $navbarCategory);
                                    if(mysqli_num_rows($navbarCategory_run) > 0)
                                    {
                                        foreach($navbarCategory_run as $navItems)
                                        {
                                        ?>
                                        <ul class="nav-item">
                                            <a class="nav-item" href="projects.php?title=<?=$navItems['id'];?>"><?=$navItems['name'];?></a>
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

<!-- Footer -->
<footer class="footer">
<?php include('includes/footer.php'); ?>
</footer>
 
