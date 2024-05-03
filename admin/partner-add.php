<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Partners</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Partners</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                
            <?php include('message.php');?>

                <div class="card">
                    <div class="card-header">
                        <h4>Add Partners
                        <a href="partner-view.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    

                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" required class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" required class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Contact Person</label>
                                    <input type="text" name="contact_person" required max="191" class="form-control">
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" max="191" required class="form-control" rows="4"> </input>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Contact Number</label>
                                    <input type="text" name="contact_number" max="191" class="form-control" required rows="4"> </input>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Partner Type</label>
                                    <select name="type_id" id="type_id" class="form-select" required>
                                    <option value="">--Select Partner Type--</option>
                                        <?php
                                        $type_query = "SELECT * FROM type";
                                        $type_query_run = mysqli_query($con, $type_query);
                                        if(mysqli_num_rows($type_query_run) > 0) {
                                            while($type_list = mysqli_fetch_assoc($type_query_run)) {
                                                $selected = ($type_list["id"] == $partner['type_id']) ? 'selected' : '';
                                                echo '<option value="'.$type_list['id'].'" '.$selected.'>'.$type_list['type_name'].'</option>';
                                            }
                                        } else {
                                            echo '<option value="">No Type Found</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!--Logo Image-->
                                <div class="col-md-6 mb-3">
                                    <label for="">Logo Image</label>
                                    <input type="file" name="logo_image" class="form-control">
                                </div>
                               

                                <div class="col-md-12 mb-3">
                                    <button type="submit" name = "partner_add_btn" class="btn btn-primary">Save Partner</button>
                                
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