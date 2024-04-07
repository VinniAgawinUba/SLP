<?php
session_start();
// Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>

<style>
    /* Header Style */
    .headers{
        background-color: #A19158;
    color: white;
    font-size: 34px;
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    padding: 15px 0;
    }
</style>

<link rel="stylesheet" href="assets/css/custom.css">
<body>
    <div class="container-fluid custombg-image-row">
        <div class="row">
                <h1 class="headers">Galleries</h1>
        </div>
        <div class="row">
            <?php
            // Get galleries from the database
            $query = "SELECT * FROM gallery ORDER BY id DESC LIMIT 9";
            $query_run = mysqli_query($con, $query);
            
            if(mysqli_num_rows($query_run) > 0) {
                while($gallery = mysqli_fetch_assoc($query_run)) {
                    $gallery_id = $gallery['id'];
                    
                    // Get photos for this gallery
                    $photo_query = "SELECT * FROM gallery_photos WHERE gallery_id = $gallery_id LIMIT 5";
                    $photo_query_run = mysqli_query($con, $photo_query);
                    $photos = mysqli_fetch_all($photo_query_run, MYSQLI_ASSOC);
                    ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div id="carousel<?= $gallery_id; ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <?php
                                    $first = true;
                                    foreach($photos as $index => $photo) {
                                        ?>
                                        <button type="button" data-bs-target="#carousel<?= $gallery_id; ?>" data-bs-slide-to="<?= $index; ?>" class="<?php echo $first ? 'active' : ''; ?>"></button>
                                        <?php
                                        $first = false;
                                    }
                                    ?>
                                </div>
                                <div class="carousel-inner">
                                    <?php
                                    $first = true;
                                    foreach($photos as $index => $photo) {
                                        ?>
                                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                            <img src="uploads/gallery_photos/<?php echo $photo['file_name']; ?>" class="d-block w-100" alt="<?php echo $photo['file_name']; ?>" style="height:250px; width:500px;">
                                        </div>
                                        <?php
                                        $first = false;
                                    }
                                    ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $gallery_id; ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $gallery_id; ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $gallery['name']; ?></h5>
                                <a href="gallery-view.php?id=<?= $gallery_id; ?>" class="btn btn-primary">View Gallery</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No galleries found.</p>";
            }
            ?>
        </div>
    </div>
</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>
