<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Gallery</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Gallery View</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>View Galleries
                        <a href="gallery-add.php" class="btn btn-primary float-end">Add Gallery</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <table id="myPost" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Project_id</th>
                                <th>Gallery Name</th>
            
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $posts = "SELECT * FROM gallery";
                            $posts_run = mysqli_query($con, $posts);
                            if (mysqli_num_rows($posts_run) > 0) {
                                foreach ($posts_run as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['project_id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                       
                                        <td>
                                            <a href="gallery-edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $row['id']; ?>" class="DeleteForm">
                                                <button type="submit" name="gallery_delete_btn" value="<?=$post['id']?>" class="btn btn-danger deleteButton">Delete</button>
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
<!-- JavaScript for Delete Button Confirmation (Buttons Should have class of deleteButton) -->
<script>
    // Select all elements with the class 'deleteButton'
    var deleteButtons = document.querySelectorAll(".deleteButton");
    
    // Iterate over each delete button and attach event listener
    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            if (confirm("Are you sure you want to delete this Article?")) {
                // Find the closest form and submit it
                this.closest(".deleteForm").submit();
            } else {
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>