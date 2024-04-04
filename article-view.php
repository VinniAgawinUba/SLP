<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');

// Fetch article details based on ID
if(isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $query = "SELECT * FROM articles WHERE id = $article_id";
    $query_run = mysqli_query($con, $query);
    if(mysqli_num_rows($query_run) > 0) {
        $article = mysqli_fetch_assoc($query_run);
    } else {
        echo "Article not found!";
    }
} else {
    echo "Article ID not provided!";
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <img src="uploads/articles/<?= $article['thumb_nail_pic']; ?>" class="customPic">
                    <h2 class="card-title"><?= $article['thumb_nail_title']; ?></h2>
                    <p class="card-text"><?= $article['content']; ?></p>
                    <p class="card-text">Date Published: <?= $article['published_date']; ?></p>
                    <!-- Add more details or formatting as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
