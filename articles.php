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
        margin-top: 40px;
    }

    .horizontal-line {
        background-color: #283971;
        width: 50%;
        margin: auto;
        border-top: 4px solid #283971 !important;
        border-radius: 14px;
    }

    #card-box {
        margin-top: 10px;
    }

    #textfield {
        border: 4px solid #435283;
        border-radius: 15px;
        left: calc(50% - 798px/2 - 8px);
        width: 40%;
        margin-left: 20%;
        margin-top: 60px;
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
    }
</style>

<h1 class="headers">Articles</h1>
<hr class="horizontal-line">
<input type="search" name="" id="textfield" placeholder="    Input search keywords...">
<span class="filter">Filter ↓</span>
<select name="" id="" class="filter-type">
    <option value="">Alphabetical</option>
    <option value="">Year</option>
    <option value="">Department</option>
</select>

<body class="main-content">
    <div class="custombg-image-row" id="main-body">
        <div class="row gy-3">
        <!-- Main Body -->

        <div class="main-content">

            <div class="row">
                <?php
                $query = "SELECT * FROM articles";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div style="display: flex; justify-content: center;" id="card-box">
                            <a href="article-view.php?id=<?= $item['id']; ?>" style="text-decoration: none; color: inherit;">
                                <div class="card h-100" style="margin-top: 50px !important;" id="card">
                                    <img src="uploads/articles/<?= $item['thumb_nail_pic']; ?>" class="customPic"> <!-- Placeholder for image-->
                                    <div class="card-body">
                                        <h5 id="title"><?= $item['thumb_nail_title']; ?></h5>
                                        <p id="card-text"><?= $item['thumb_nail_summary']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                    <!--Bottom of Card to place date-->
                                    <p style="padding:5px; font-size:12px" id="card-text">Date Published: <?= date('F j, Y', strtotime($item['published_date'])); ?></p>
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