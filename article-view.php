<style>
    .title-container {
        background-color: #A19158;
        padding: 40px;
    }

    #card-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 40px;
        line-height: 48px;
        text-align: center;
        letter-spacing: 0.1em;

        color: #FFFFFF;
    }

    .publish-date-text {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 24px;
        text-align: center;
        letter-spacing: 0.1em;

        color: #FFFFFF;
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
        letter-spacing: 0.075em;

        color: #FFFFFF;
        text-align: justify;

    }

    #super-container {
        background-color: #283971;
        height: 1000px;
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

<div class="title-container">
    <h2 class="card-title" id="card-title"><?= $article['thumb_nail_title']; ?></h2>
    <p class="publish-date-text"><?= date('F j, Y', strtotime($article['published_date'])); ?></p>
</div>
<div id=super-container>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="card">
                    <div class="card-body" id="card-body">
                        <img src="uploads/articles/<?= $article['thumb_nail_pic']; ?>" id="customPic">
                        <!-- Add more details or formatting as needed -->
                    </div>
                </div>
                <article id="article-text">
                    <p><?= $article['content']; ?></p>
                </article>+
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>