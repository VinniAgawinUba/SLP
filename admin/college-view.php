<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Colleges</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Colleges</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>View Colleges
                        <a href="college-add.php" class="btn btn-primary float-end">Add Colleges</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="myCollege" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Dean</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM college";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['name']; ?></td>
                                            <td><img src="../uploads/college_logos/<?= $row['logo_image'];?>" width="100px;"></td>
                                            <td>
                                                <?php
                                                $deanId = $row['dean_id'];
                                                $query = "SELECT fname, lname FROM faculty WHERE id = '$deanId'";
                                                $result = mysqli_query($con, $query);
                                                if(mysqli_num_rows($result) > 0) {
                                                    $dean = mysqli_fetch_assoc($result);
                                                    echo $dean['fname'] . ' ' . $dean['lname'];
                                                } else {
                                                    echo 'No Dean Found';
                                                }
                                                ?>
                                            </td>
                                            <td><a href="college-edit.php?id=<?=$row['id'];?>" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                <button type="submit" name="college_delete" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                   ?>
                                   <tr>
                                    <td colspan="6">No Records Found</td>
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
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>