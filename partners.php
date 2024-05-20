<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">
<style>
    .header {
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

    #background-image {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 50vw;
        object-fit: contain;
    }

    body {
        margin-left: 100px;
        margin-right: 100px;
    }


    .sub-headers-background {
        display: flex;
        background-color: #A19158;
        padding: 15px 0;
        margin-left: -12px;
        margin-right: -12px;
        margin-top: -20px;
        justify-content: left;
        align-items: left;
        border-radius: 5px;
    }

    #sub-headers {
        padding: 20px;
        margin-left: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;

        color: #FFFFFF;
    }
</style>
<h4 class="header">PARTNERS</h4>
<hr class="horizontal-line">

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">LOCAL GOVERNMENT UNITS</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 1";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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
<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">CIVIL SOCIETY ORGANIZATIONS</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 2";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-100" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">INDUSTRY</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 3";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">NON-GOVERNMENT</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 4";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">PRIVATE SECTOR</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 5";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">IN XAVIER UNIVERSITY</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 6";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">GOVERNMENT AGENCIES</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 7";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">SCHOOLS</h5>
            </div>
            <div class="row gy-3">
                <?php
                $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 8";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class='col-md-2'>
                            <div style="display: flex; justify-content: center;" id="card-box">
                                <a href="partner-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card h-70" style="margin-top: 50px !important;" id="card">
                                        <img src="uploads/partner_logos/<?= $item['logo_image']; ?>" class="customPic"> <!-- Placeholder for image-->
                                        <div class="card-body">
                                            <h5 id="title"><?= $item['name']; ?></h5>
                                            <p id="card-text"><?= $item['address']; ?></p>
                                            <!-- You can add more project details here -->
                                        </div>
                                    </div>
                                </a>
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
<!-- Footer -->
<?php include('includes/footer.php'); ?>