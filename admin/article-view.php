<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Article</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Article View</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>View Articles
                        <a href="article-add.php" class="btn btn-primary float-end">Add Articles</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <table id="myArticle" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Project_id</th>
                                <th>Thumbnail Pic</th>
                                <th>Thumbnail Title</th>
                                <th>Thumbnail Sumamry</th>
                                <th>Published Date</th>
                                <th>Featured</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $posts = "SELECT * FROM articles";
                            $posts_run = mysqli_query($con, $posts);
                            if (mysqli_num_rows($posts_run) > 0) {
                                foreach ($posts_run as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['project_id']; ?></td>
                                        <td><img src="../uploads/articles/<?= $row['thumb_nail_pic']; ?>" width="60px" height="60px"></td>
                                        <td><?= $row['thumb_nail_title']; ?></td>
                                        <td><?= $row['thumb_nail_summary']; ?></td>
                                        <td><?= $row['published_date']; ?></td>
                                        <td>
                                                <input type="checkbox" name="featured" value="<?= $row['id']; ?>" <?php if ($row['featured'] == 1) echo "checked"; ?>>
                                                
                                        </td>
                                        <td>
                                            <a href="article-edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $row['id']; ?>" class="DeleteForm">
                                                <button type="submit" name="article_delete_btn" value="<?=$post['id']?>" class="btn btn-danger deleteButton">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>
                            
                        </tbody>
                    </table>
                        
                    </div>
            </div>
        </div>
</div>


<!-- JavaScript for handling checkbox clicks -->
<script>
    // Listen for click events on checkboxes
    document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            // Get the article ID and the checked status
            var articleId = this.value;
            var isChecked = this.checked ? 1 : 0;

            // Send AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'javascript-update_featured_article.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    // Handle response
                    if (xhr.status === 200) {
                        console.log('Featured status updated successfully');
                    } else {
                        console.error('Error updating featured status');
                    }
                }
            };
            xhr.send('id=' + articleId + '&featured=' + isChecked);
        });
    });
</script>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>