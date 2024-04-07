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
                        <h4>Add Colleges
                        <a href="college-view.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" required class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Dean</label>
                                    <select name="dean_id" class="form-control">
                                        <option value="">--Select Dean From Faculty--</option>
                                        <?php
                                        $faculties = "SELECT * FROM faculty";
                                        $faculties_run = mysqli_query($con, $faculties);
                                        

                                        if(mysqli_num_rows($faculties_run) > 0) {
                                            foreach($faculties_run as $faculty) {
                                                echo '<option value="'.$faculty['id'].'">'.$faculty['fname'].' '.$faculty['lname'].'</option>';
                                            }
                                        } else {
                                            echo "<option value=''>No Faculties Found</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Logo</label>
                                    <input type="file" name="logo_image" required class="form-control">
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name = "add_college" class="btn btn-primary">Add College</button>
                                
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>