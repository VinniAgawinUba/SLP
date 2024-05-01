<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>

<link rel="stylesheet" href="assets/css/custom.css">

<style>
    .headers {
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

    #local-governments-header {
        margin-top: 10px;
        font-family: 'Inter';
    }

    .header {
        display: flex;
        background-color: #A19158;
        padding: 15px 0;
        color: white;

        font-size: 34px;
        font-family: 'Inter';
        font-weight: 800;
        font-style: normal;
        margin-top: -90px;
    }

    #first-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 50vw;
        object-fit: contain;
        margin-top: 100px;
    }
</style>

<h1 class="headers">PARTNERS</h1>
<hr class="horizontal-line">

<body class="main-content">
    <div class="container-fluid" id="first-content">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="header">
                        <h5 id="local-governments-header">Local Government Units</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 1";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid" id="second-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">Civil Society Organizations</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 2";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" id="third-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">Industry</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 3";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" id="fourth-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">Non - Government</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 4";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" id="fifth-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">Private Sector</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 5";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" id="sixth-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">In - XU</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 6";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" id="seventh-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">Government Agencies</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 7";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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

                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" id="eigth-content">
        <div class="row gy-3">
            <div class="secondContent">

                <div class="row gy-3">
                    <div class="project-header">
                        <h5 id="project-header">Schools</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1 AND type_id = 8";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
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