<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Main Body -->
<div class="container-fluid px-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Home</h4>
            </div>
            
    </div>
    
</div>

<!-- Sidebar -->
</div class="container d-flex flex-column align-items-center">
    <div class="row">
        <div class="col-md-3">
            <?php
            include('includes/sidebar.php');
            ?>
        </div>
    </div>
</div>

<!-- footer -->
<?php
include('includes/footer.php');
?>