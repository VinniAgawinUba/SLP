<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<style>
    /* .card {
        position: relative;
        overflow: hidden;
    }

    .headImage {
        position: relative;
    } */

    /* .card-img-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        max-width: 80%;
        text-align: center;
    } */

    /* .card-title,
    .card-text {
        margin-bottom: 0;
    } */

    #home-box {
        width: 1101px;
        height: 513px;
        display: flex;

        background: url(assets/images/BG.png);
        border-radius: 10px;
        margin-bottom: 100px;
        margin-top: 1px;
        padding: 100px;
    }


    #home-layer {
        border-radius: 10px;
        border: none;
        padding-bottom: 10px;

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
</style>
<link rel="stylesheet" href="assets/css/custom.css">

<body>
    <div class="card headImage" id="home-layer">
        <div class="" id="home-box">
            <aside>
                <img src="assets/images/BG.png" alt="sample-photo" id="sample-photo">
            </aside>
            <article class="home-article">
                <h4 id="home-header">STUDENT LEARNING PROGRAM</h4>
                <p class="" style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button id="find-out-more-button">Find out more</button>
            </article>
        </div>
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
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                    ?>
                            <div class="col-md-4 mb-4 gy-4">
                                <div class="card bg-transparent border-0 p-3 FmarginCard">
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
                    <div class="projects">PROJECTS</div>
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
    </div>
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>