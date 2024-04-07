<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Projects</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Projects</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>View Partners
                        <a href="partner-add.php" class="btn btn-primary float-end">Add Partner</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <table id="myPartner" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Address</th>
                                <th>Contact Person</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Contacy Number</th>
                                <th>Featured</th>
                                
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //$posts = "SELECT * FROM posts WHERE status != '2'";
                            $posts = "SELECT * FROM partners";
                            $posts_run = mysqli_query($con, $posts);
                            if (mysqli_num_rows($posts_run) > 0) {
                                foreach ($posts_run as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><img src="../uploads/partner_logos/<?=$row['logo_image']; ?>" alt="<?= $row['name']; ?>-logo" style="width: 100px;"></td>
                                        <td><?= $row['address']; ?></td>
                                        <td><?= $row['contact_person']; ?></td>
                                        <td><?= $row['designation']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['contact_number']; ?></td>
                                        <td>
                                            <input type="checkbox" value="<?= $row['id']; ?>" <?= $row['featured'] == 1 ? 'checked' : ''; ?>>
                                        </td>
                                        <td>
                                            <a href="partner-edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                <button type="submit" name="partner_delete_btn" value="<?=$post['id']?>" class="btn btn-danger deleteButton">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>
                                <?php
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
            // Get the project ID and the checked status
            var partnerID = this.value;
            var isChecked = this.checked ? 1 : 0;

            // Send AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'javascript-update_featured_partners.php', true);
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
            xhr.send('id=' + partnerID + '&featured=' + isChecked);
        });
    });
</script>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>