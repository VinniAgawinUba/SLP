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

    #textfield {
        width: 40%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 78px;
        border-radius: 15px;
        padding: 8px 12px;
        background: url("https://static.thenounproject.com/png/101791-200.png") no-repeat 10px;
        border: 3px solid #ccc;
        padding-left: 40px;
        background-size: 20px;
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

    .pagination {
        padding: 20px 0;
        margin-top: 20px;
        text-align: center;
        justify-content: center;
    }

    .pagination a {
        color: #283971;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #283971;
        color: white;
        border: 1px solid #283971;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }

    .centered-textfield {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<?php
//PAGINATION
// Define the number of articles per page
$articlesPerPage = 9;

// Determine the current page
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// Calculate the offset
$offset = ($currentPage - 1) * $articlesPerPage;

?>
<h1 class="headers">ARTICLES</h1>
<hr class="horizontal-line">

<div class="centered-textfield">
    <input type="search" name="" id="textfield" placeholder="    Input search keywords...">
</div>


<script>
    // Function to filter articles based on search input
    function filterArticles() {
        // Get the search input value
        var searchText = document.getElementById('textfield').value.toLowerCase();

        // Get all containers containing articles to be filtered
        var containers = document.querySelectorAll('.card');

        // Loop through each container and hide/show based on the search text
        containers.forEach(function(container) {
            // Get the title and summary within the container
            var title = container.querySelector('#title').textContent.toLowerCase();
            var summary = container.querySelector('#card-text').textContent.toLowerCase();

            // Check if the title or summary contains the search text
            if (title.includes(searchText) || summary.includes(searchText)) {
                // Show the container
                container.parentElement.style.display = 'block';
            } else {
                // Hide the container
                container.parentElement.style.display = 'none';
            }
        });
    }

    // Bind an event listener to the search input to trigger filterArticles function on input change
    document.getElementById('textfield').addEventListener('input', filterArticles);
</script>


<body class="main-content">
    <div class="custombg-image-row" id="main-body">
        <div class="row gy-3">
            <!-- Main Body -->

            <div class="main-content">

                <div class="row">
                    <?php
                    // Modify the query to select only featured articles
                    $query = "SELECT * FROM articles LIMIT $offset, $articlesPerPage";
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
                                        <p style="padding:5px; font-size:12px" id="card-date"><?= date('F j, Y', strtotime($item['published_date'])); ?></p>
                                    </div>
                                </a>
                            </div>

                    <?php
                        }
                    } else {
                        echo "No featured articles found";
                    }

                    // Pagination links
                    $totalArticlesQuery = "SELECT COUNT(*) AS total FROM articles";
                    $totalArticlesResult = mysqli_query($con, $totalArticlesQuery);
                    $totalArticles = mysqli_fetch_assoc($totalArticlesResult)['total'];
                    $totalPages = ceil($totalArticles / $articlesPerPage);

                    echo "<div class='pagination'>";
                    for ($i = 1; $i <= $totalPages; $i++) {
                        if ($i == $currentPage) {
                            echo "<a class='active' href='articles.php?page=$i'>$i</a>";
                        } else {
                            echo "<a href='articles.php?page=$i'>$i</a>";
                        }
                    }
                    echo "</div>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>