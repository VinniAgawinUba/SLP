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
        width: 230px;
        height: 475px;
    }

    #card-box {
        flex-basis: 36px;
        margin: 29px;
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
    <div class="custombg-image-row" id="main-body>
        <div class=" row gy-3">
        <!-- Main Body -->

        <div class="main-content">

            <div class="row">
                <?php
                $query = "SELECT * FROM posts";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div style="display: flex; justify-content: center; " id="card-box">
                            <div class="card h-100" style="margin-top: 50px !important;" id="card">
                                <a href="#"><img src="assets/images/article-pic.png" class="customPic"></a> <!-- Placeholder for image-->
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item['name']; ?></h5>
                                    <p class="card-text"><?= $item['name']; ?></p>
                                    <!-- You can add more project details here -->
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
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>