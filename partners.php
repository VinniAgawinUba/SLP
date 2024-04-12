<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>

<link rel="stylesheet" href="assets/css/custom.css">

<style>
    .partners-header {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 58px;
        text-align: center;

        color: #283971;
        margin-top: 99px;
    }

    .horizontal-line {
        background-color: #283971;
        width: 50%;
        margin: auto;
        border-top: 4px solid #283971 !important;
        border-radius: 14px;
        margin-top: 36px;
        margin-bottom: 57px;
    }
</style>

<body>
    <h1 class="partners-header">PARTNERS</h1>
    <hr class="horizontal-line">
    <div class="container-fluid custombg-image-row ">
        <div class="row gy-3">
            <!-- Main Body -->

            <div class="mainContent">
                <div class="row gy-3">
                    <div class="articles">Major Partners</div>
                    <?php
                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
                            <div class="col-md-4 mb-4 gy-4">
                                <div class="card bg-transparent border-0 ">
                                    <img src="assets/images/images.jpg" class="card-img articleImage" alt="...">
                                    <div class="card-img-overlay">

                                    </div>
                                </div>

                            </div>


                    <?php
                        }
                    }
                    ?>


                </div>

            </div>
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="projects">Partners</div>
                    <?php

                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
                            <div class="col-md-4 mb-4 gy-4">
                                <div class="card bg-transparent border-0 p-3 marginCard">
                                    <img src="assets/images/images.jpg" class="card-img articleImage" alt="...">
                                    <div class="card-img-overlay">

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
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>