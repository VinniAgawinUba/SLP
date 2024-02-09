<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Faculty</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Faculty</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>View Faculty
                        <a href="faculty-add.php" class="btn btn-primary float-end">Add Faculty</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>College</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //$posts = "SELECT * FROM posts WHERE status != '2'";
                            $students = "SELECT * FROM faculty";
                            $students_run = mysqli_query($con, $students);
                            if (mysqli_num_rows($students_run) > 0) {
                                foreach ($students_run as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['fname']; ?></td>
                                        <td><?= $row['lname']; ?></td>
                                        <td><?= $row['full_name']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['college']; ?></td>
                                        <td><?= $row['department']; ?></td>
                                        <td><?= $row['role']; ?></td>
                                        <td><img src="../uploads/faculty/<?=$row['image']; ?>" width="60px" height="60px"></td>

                                        <td>
                                            <a href="faculty-edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                <button type="submit" name="faculty_delete_btn" value="<?=$post['id']?>" class="btn btn-danger">Delete</button>
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
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                        
                    </div>
            </div>
        </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>