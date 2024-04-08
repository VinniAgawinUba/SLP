<?php
include('authentication.php');
include('includes/header.php');
include('includes/scripts.php');
include('config/dbcon.php'); // Include your database connection

// Fetch article details based on ID
if(isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $query = "SELECT * FROM articles WHERE id = $article_id";
    $query_run = mysqli_query($con, $query);
    if(mysqli_num_rows($query_run) > 0) {
        $article = mysqli_fetch_assoc($query_run);
        // Decode Base64-encoded images in content
        $article['content'] = preg_replace_callback('/<img[^>]+src="([^">]+)"/', function($match) {
            if(strpos($match[1], 'data:image') !== false) {
                return '<img src="' . $match[1] . '">';
            } else {
                return $match[0];
            }
        }, $article['content']);
    } else {
        echo "Article not found!";
        exit; // Stop execution if article not found
    }
} else {
    echo "Article ID not provided!";
    exit; // Stop execution if article ID not provided
}

?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Edit Article</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item"><a href="articles.php">Articles</a></li>
        <li class="breadcrumb-item">Edit Article</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Article
                        <a href="article-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="article_id" value="<?= $article['id']; ?>">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Title</label>
                                <input type="text" name="thumb_nail_title" required class="form-control" placeholder="Article Title" value="<?= $article['thumb_nail_title']; ?>">
                            </div>
                            <div>
                                <label for="">Associated Project</label>
                                <?php
                                $category_query = "SELECT * FROM projects";
                                $category_query_run = mysqli_query($con, $category_query);
                                if(mysqli_num_rows($category_query_run) > 0) {
                                ?>
                                    <select name="project_id" required class="form-control select2">
                                        <option value="">--Select Project--</option>
                                        <?php
                                        foreach($category_query_run as $category_list) {
                                            $selected = ($article['project_id'] == $category_list['id']) ? 'selected' : '';
                                        ?>
                                            <option value="<?=$category_list['id']; ?>" <?= $selected; ?>> <?=$category_list['name']; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No Project Found";
                                }
                                ?>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Content</label>
                                <textarea name="content" class="form-control" id="" required rows="4"><?= $article['content']; ?></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Thumbnail Summary</label>
                                <textarea name="thumb_nail_summary" required max="191" class="form-control" placeholder="Brief Summary of Article to entice viewers" maxlength="500"><?= $article['thumb_nail_summary']; ?></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Thumbnail Pic</label>
                                <input type="file" name="thumb_nail_pic" class="form-control">
                                <small class="text-muted">Leave it blank if you don't want to change the image.</small>
                                <img src="../uploads/articles/<?= $article['thumb_nail_pic']; ?>" width="60px" height="60px">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="article_edit_btn" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
