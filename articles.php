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
        margin-top: 40px;
    }

    #main-image {
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

    .horizontal-line {
        background-color: #283971;
        width: 50%;
        margin: auto;
        border-top: 4px solid #283971 !important;
        border-radius: 14px;
    }

     /* Add hover effect for card */
     .card:hover {
        transform: scale(1.1); /* Increase scale on hover */
        transition: transform 0.3s ease; /* Add smooth transition */
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); /* Add box shadow for depth */
    }

</style>

<body>
    <div class="container-fluid custombg-image-row">
        <div class="row gy-3" >
        <h1 class="articlePage">Articles</h1>
        <div class="articleLine"></div>
        
            <!-- Main Body -->
            
            <div class="">
                
            <div class="row">
                <?php
                $query = "SELECT * FROM posts";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $item) {
                ?>
                        <div class="col-md-3 mb-6 gy-3">
                            <div class="card h-100" style="height: 20rem; width: 15rem; background: url(assets/images/BGblueBook.png); background-size: 300px; background-repeat: no-repeat;">
                                <div class="card-body">
                                    <h5 class="card-title text-white text-center"><?= $item['name']; ?></h5>
                                    <p class="card-text text-center" style="font-weight: bold; font-size: 20px; color: #6ea6ff;"><?= $item['name']; ?></p>
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
