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
                        <h4>View Projects
                        <a href="project-add.php" class="btn btn-primary float-end">Add Project</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Subject Hosted</th>
                                <th>College</th>
                                <th>Department</th>
                                <th>SD Coordinator</th>
                                <th>Partner</th>
                                <th>School Year</th>
                                <th>Semester</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //$posts = "SELECT * FROM posts WHERE status != '2'";
                            $posts = "SELECT * FROM projects";
                            $posts_run = mysqli_query($con, $posts);
                            if (mysqli_num_rows($posts_run) > 0) {
                                foreach ($posts_run as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['description']; ?></td>
                                        <td><?= $row['type']; ?></td>
                                        <td><?= $row['subject_hosted']; ?></td>
                                        <td><?= $row['college']; ?></td>
                                        <td><?= $row['department']; ?></td>
                                        <td><?= $row['sd_coordinator']; ?></td>
                                        <td><?= $row['partner']; ?></td>
                                        <td><?= $row['school_year']; ?></td>
                                        <td><?= $row['semester']; ?></td>
                                        <td><?= $row['status']; ?></td>
                                        <td>
                                            <a href="project-edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                <button type="submit" name="project_delete_btn" value="<?=$post['id']?>" class="btn btn-danger">Delete</button>
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