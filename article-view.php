<style>
    .title-container {
        padding: 28px;
    }

    #card-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        line-height: 48px;
        text-align: left;
        margin-left: 20px;

        color: #283971;
    }

    .publish-date-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        margin-left: 20px;

        color: #283971;
    }

    .col-md-12 {
        width: 967px;
        background-color: #283971;
    }

    #card {
        border-color: #FFFFFF;
        border: none;
    }

    #article-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        color: #283971;
        text-align: justify;

    }

    #super-container {
        height: auto;
        padding: 36px;
        overflow: auto;
        scrollbar-width: none;
    }

    #card-body {
        background-color: #283971;
        border: 1px solid #FFFFFF;
        border-radius: 5px;
    }

    #customPic {
        width: 500px;
        height: auto;
        float: left;
        margin-right: 30px;
        margin-bottom: 20px;
    }
</style>

<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');

// Fetch article details based on ID
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $query = "SELECT * FROM articles WHERE id = $article_id";
    $query_run = mysqli_query($con, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $article = mysqli_fetch_assoc($query_run);
    } else {
        echo "Article not found!";
    }
} else {
    echo "Article ID not provided!";
}
?>

<body>
    <div class="title-container">
        </div>
        <div id=super-container>
            <div class="container">
                <img src="uploads/articles/<?= $article['thumb_nail_pic']; ?>" id="customPic">
                <!-- Add more details or formatting as needed -->
                <h2 class="card-title" id="card-title"><?= $article['thumb_nail_title']; ?></h2>
                <p class="publish-date-text"><?= date('F j, Y', strtotime($article['published_date'])); ?></p>
            <article id="article-text">
                <p><?= $article['content']; ?></p>
            </article>
            
                
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<?php include('includes/footer.php'); ?>