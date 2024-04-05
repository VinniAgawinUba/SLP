<?php
include('authentication.php');
include('includes/header.php');
include('includes/scripts.php');

// Fetch existing gallery details for editing
if(isset($_GET['id'])) {
    $gallery_id = $_GET['id'];
    $gallery_query = "SELECT * FROM gallery WHERE id = '$gallery_id'";
    $gallery_query_run = mysqli_query($con, $gallery_query);
    $gallery_details = mysqli_fetch_assoc($gallery_query_run);

    // Fetch photos associated with this gallery
    $photos_query = "SELECT * FROM gallery_photos WHERE gallery_id = '$gallery_id'";
    $photos_query_run = mysqli_query($con, $photos_query);
}
?>


<div class="container-fluid px-4">
    <h4 class="mt-4">Edit Gallery</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Galleries</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <?php include('message.php');?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Galleries
                    <a href="gallery-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Gallery Name</label>
                                <input type="text" name="name" required class="form-control" placeholder="Gallery Name" value="<?php echo $gallery_details['name']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Associated Project</label>
                                <?php
                                $project_query = "SELECT * FROM projects";
                                $project_query_run = mysqli_query($con, $project_query);
                                if(mysqli_num_rows($project_query_run) > 0) {
                                ?>
                                    <select name="project_id" required class="form-control select2">
                                        <option value="">--Select Project--</option>
                                        <?php
                                        foreach($project_query_run as $project) {
                                            $selected = ($project['id'] == $gallery_details['project_id']) ? 'selected' : '';
                                        ?>
                                            <option value="<?= $project['id']; ?>" <?= $selected; ?>><?= $project['name']; ?></option>
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

                            <div class="col-md-6 mb-3">
                                <label for="">Pictures</label>
                                <input type="file" name="pictures[]" multiple class="form-control">
                            </div>

                            <!-- Display Photos in Gallery -->
                            <div class="col-md-12 mb-3">
                                <h5>Photos in Gallery</h5>
                                <div class="row">
                                    <?php
                                    if (mysqli_num_rows($photos_query_run) > 0){
                                        while($photo = mysqli_fetch_assoc($photos_query_run)) {
                                    ?>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="<?php echo $photo['file_path']; ?>" class="card-img-top" alt="Photo">
                                            <div class="card-body">
                                                <p class="card-text"><?php echo $photo['file_name']; ?></p>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="photo_id" value="<?php echo $photo['id']; ?>">
                                                    <input type="hidden" name="gallery_id" value="<?php echo $gallery_id; ?>">
                                                    <button type="submit" name="delete_photo_btn" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    } else {
                                        echo "No Photos in Gallery";
                                    }
                                    ?>
                                </div>
                            </div>



                            <div class="col-md-12 mb-3">
                                <input type="hidden" name="gallery_id" value="<?php echo $gallery_id; ?>">
                                <button type="submit" name="gallery_edit_btn" class="btn btn-primary">Update Gallery</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>
