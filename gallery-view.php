<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');

// Fetch all photos associated with the gallery
if(isset($_GET['id'])) {
    $gallery_id = $_GET['id'];
    $query = "SELECT * FROM gallery_photos WHERE gallery_id = $gallery_id";
    $query_run = mysqli_query($con, $query);
} else {
    echo "Gallery ID not provided!";
}
?>

<div class="container">
    <div class="row">
        <?php
        if(mysqli_num_rows($query_run) > 0) {
            while($photo = mysqli_fetch_assoc($query_run)) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src='uploads/gallery_photos/<?= $photo['file_name'];?>' class="card-img-top" alt="Photo">
                <div class="card-body">
                    <h5 class="card-title"><?= $photo['file_name']; ?></h5>
                    <p class="card-text">Uploaded on <?= date('F j, Y', strtotime($photo['date_uploaded'])); ?></p>
                    <!-- You can add more details here as needed -->
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "No photos found in this gallery!";
        }
        ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>
