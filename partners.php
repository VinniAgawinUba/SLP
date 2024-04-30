<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>

<link rel="stylesheet" href="assets/css/custom.css">

<style>

#home-box {
        width: 1101px;
        height: 513px;
        display: flex;

        background: url(assets/images/BG.png);
        border-radius: 10px;
        margin-top: 1px;
        padding: 100px;
    }


    #home-layer {
        border: none;
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    #home-header {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 900;
        font-size: 28px;
        line-height: 34px;
        letter-spacing: 0.2em;
        color: #FFFFFF;

        float: left;
    }

    #sample-photo {
        width: 20pc;
        height: 20pc;
        flex: 1;
    }

    .home-article {
        flex: 2;
        float: left;
        text-align: left;
        padding: 30px;

    }

    #find-out-more-button {
        width: 140px;
        height: 32px;
        left: 865px;
        top: 2714px;
        border: none;
        background: #283971;
        border-radius: 30px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 16px;
        text-align: center;
        color: #FFFFFF;
    }

    #find-out-more-button:hover {
        background-color: #A19158;
        transition: color 5s;
    }

    #find-out-more-button:active {
        background-color: #8D7F4D;
    }

    #card-box {
        flex-basis: 36px;
        margin: 29px;
        text-overflow: ellipsis;
    }

    #card-box:hover {
        transition: transform 0.2s;
        transform: scale(1.05);
    }

    #article-header {
        padding: 20px;
        margin-left: 180px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;

        color: #FFFFFF;
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

    #see-all-button {

        background: #FFFFFF;
        width: 95px;
        height: 35px;


        padding: 10px;
        padding-bottom: 10px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 15px;
        text-align: center;
        color: #A19158;

        border-radius: 30px;
        border: none;
        margin-left: 650px;
    }

    #see-all-button:hover {
        background: #283971;
        color: white;
    }

    #see-all-button:active {
        background: hsl(227, 49%, 20%);
        color: white;
    }

    .aside-button {
        margin-top: 15px;
    }

    #article-header {
        margin-top: 10px;
    }

    body {
        margin-left: 100px;
        margin-right: 100px;
    }

    .card-body {
        box-sizing: border-box;
        border-radius: 10px;
        height: 120px;
    }

    a {
        text-decoration: none;
    }
    #title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 19px;

        color: #000000;
    }

    #card-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 15px;
        height: 41.75px;

        color: #000000;
    }

    #publish-date {

        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 15px;

        color: #6F6F6F;
        text-align: right;
        margin-right: 30px;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    #project-header {
        padding: 20px;
        margin-left: 180px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;

        color: #FFFFFF;
    }

    .project-header {
        display: flex;
        background-color: #A19158;
        padding: 15px 0;
        color: white;

        font-size: 34px;
        font-family: 'Inter';
        font-weight: 800;
        font-style: normal;
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

    #second-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #third-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #fourth-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #fifth-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #sixth-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #seventh-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #eigth-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #projects-card {
        background: #FFFFFF;
        border-radius: 10px;
        width: 266px;
    }

    #project-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 19px;
        padding: 10px;
        color: #000000;
    }

    #project-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 15px;
        height: 41.75px;
        padding-left: 10px;
        margin-top: -10px;
        color: #000000;
    }

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

    #textfield {
        border: 4px solid #435283;
        border-radius: 15px;
        left: calc(50% - 798px/2 - 8px);
        width: 40%;
        margin-left: 20%;
        margin-bottom: 78px;
    }

    ::placeholder {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 16px;
        letter-spacing: 0.205em;

        color: rgba(40, 57, 113, 0.47);
    }

    .filter {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 15px;
        text-align: center;
        letter-spacing: 0.2em;

        color: #6F6F6F;
        margin-left: 100px;
    }

    .filter-type {
        background: #283971;
        border-radius: 30px;
        width: 157.07px;
        height: 38.96px;
        border: none;
        padding: 8px;
        color: #FFFFFF;
        font-weight: bold;
        border: none;
        text-decoration: none;
    }

    #card {
        background: #FFFFFF;
        border-radius: 10px;
        width: 303px;
        height: 475px;
    }

    #card-box {
        flex-basis: 36px;
        margin: 29px;
        text-overflow: ellipsis;
    }

    #card-box:hover {
        transition: transform 0.2s;
        transform: scale(1.05);
    }


    #title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 19px;
        line-height: 23px;

        color: #000000;
        margin-top: 26px;
    }

    #card-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 10px;
        line-height: 12px;

        margin-top: 8px;
        color: #000000;
        margin-bottom: 0px;
        text-align: justify;
    }

    #main-body {
        margin-top: 34px;
        height: 1000px;
    }

    #card-date {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 8px;
        line-height: 10px;

        color: #6F6F6F;
        text-align: right;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    body {
        margin-left: 100px;
        margin-right: 100px;
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
                        <h5 id="article-header">Local Government Units</h5>
                    </div>
                    <?php
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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
                    $query = "SELECT * FROM partners WHERE featured = 1";
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