<?php
include('authentication.php');
include('includes/header.php');
include('includes/scripts.php');
?>


<div class="container-fluid px-4">
        <h4 class="mt-4">Gallery</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item">Galleries</li>
            </ol>
            <div class="row">

            <div class="col-md-12">
                
            <?php include('message.php');?>

                <div class="card">
                    <div class="card-header">
                        <h4>Add Galleries
                        <a href="gallery-view.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="">Gallery Name</label>
                                    <input type="text" name="name" required class="form-control" placeholder="Gallery Name">
                                </div>

                                <div>
                                <label for="">Associated Project</label>
                                <?php
                                $category_query = "SELECT * FROM projects";
                                $category_query_run = mysqli_query($con, $category_query);
                                if(mysqli_num_rows($category_query_run) > 0) {
                                ?>
                                    <select name="project_id" required class="form-control select2">
                                        <option value="">--Select Project--</option>
                                        <?php
                                        foreach($category_query_run as $category_list) {
                                        ?>
                                            <option value="<?=$category_list['id']; ?>"> <?=$category_list['name']; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No Project Found";
                                }
                                ?>
                                </div>
                                
                                
                                <div class="col-md-6 mb-3">
                                    <label for="">Pictures</label>
                                    <input type="file" name="pictures[]" multiple class="form-control">
                                </div>


                                <div class="col-md-12 mb-3">
                                    <button type="submit" name = "gallery_add_btn" class="btn btn-primary">Save Post</button>
                                
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include('includes/footer.php');
?>