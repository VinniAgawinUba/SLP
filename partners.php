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
        height: 30vw;
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

    .header-container {
        display: flex;
        background-color: #A19158;
        padding: 15px 0;
        margin-left: -12px;
        margin-right: -12px;
        justify-content: left;
        align-items: left;
        border-radius: 5px;
    }

    #featured-header {
        padding: 20px;
        margin-left: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;

        color: #FFFFFF;
    }

    .featured-section {
        margin-top: -50px;
    }
</style>
<h4 class="header">PROJECTS</h4>
<hr class="horizontal-line">

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">LOCAL GOVERNMENT UNITS</h5>
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
        </div>
    </div>
</div>

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">INDUSTRY</h5>
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
        </div>
    </div>
</div>

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">PRIVATE SECTOR</h5>
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
        </div>
    </div>
</div>

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <div class="sub-headers-background">
                <h5 id="sub-headers">GOVERNMENT AGENCIES</h5>
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
        </div>
    </div>
</div>
<!-- Footer -->
<?php include('includes/footer.php'); ?>