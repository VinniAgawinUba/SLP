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

                    <table id="myProject" class="table table-bordered table-striped">
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
                                <th>Featured</th>
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
                                        <td><a href="project_details.php?id=<?= $row['id']; ?>"><?= $row['name']; ?></a></td>
                                        <td><?= $row['description']; ?></td>
                                        <td><?= $row['type']; ?></td>
                                        <td><?= $row['subject_hosted']; ?></td>
                                        <td>
                                                <?php 
                                                if($row['college_id'] > 0)
                                                {
                                                    $college_query = "SELECT name FROM college WHERE id = ".$row['college_id'];
                                                    $college_query_run = mysqli_query($con, $college_query);
                                                    if(mysqli_num_rows($college_query_run) > 0)
                                                    {
                                                        foreach($college_query_run as $college_list)
                                                        {
                                                            echo $college_list['name'];
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "No College Found";
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No College Found";
                                                }
                                                
                                                ?>
                                            
                                            </td>

                                            <td>
                                                <?php 
                                                if($row['department_id'] > 0)
                                                {
                                                    $department_query = "SELECT name FROM department WHERE id = ".$row['department_id'];
                                                    $department_query_run = mysqli_query($con, $department_query);
                                                    if(mysqli_num_rows($department_query_run) > 0)
                                                    {
                                                        foreach($department_query_run as $department_list)
                                                        {
                                                            echo $department_list['name'];
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "No Department Found";
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No Department Found";
                                                }
                                                
                                                ?>
                                            
                                            </td>
                                            <td>
                                                <?php 
                                                if($row['sd_coordinator_id'] > 0)
                                                {
                                                    $coordinator_query = "SELECT fname, lname FROM faculty WHERE id = ".$row['sd_coordinator_id'];
                                                    $coordinator_query_run = mysqli_query($con, $coordinator_query);
                                                    if(mysqli_num_rows($coordinator_query_run) > 0)
                                                    {
                                                        foreach($coordinator_query_run as $coordinator_list)
                                                        {
                                                            echo $coordinator_list['fname'].' '.$coordinator_list['lname'];
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "No Coordinator Found";
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No Coordinator Found";
                                                }
                                                
                                                ?>
                                            
                                            </td>
                                            <td>
                                                <?php 
                                                if($row['partner_id'] > 0)
                                                {
                                                    $partner_query = "SELECT name FROM partners WHERE id = ".$row['partner_id'];
                                                    $partner_query_run = mysqli_query($con, $partner_query);
                                                    if(mysqli_num_rows($partner_query_run) > 0)
                                                    {
                                                        foreach($partner_query_run as $partner_list)
                                                        {
                                                            echo $partner_list['name'];
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "No partner Found";
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No partner Found";
                                                }
                                                
                                                ?>
                                            
                                            </td>
                                            <td>
                                                <?php 
                                                if($row['school_year_id'] > 0)
                                                {
                                                    $sy_query = "SELECT school_year FROM school_year WHERE id = ".$row['school_year_id'];
                                                    $sy_query_run = mysqli_query($con, $sy_query);
                                                    if(mysqli_num_rows($sy_query_run) > 0)
                                                    {
                                                        foreach($sy_query_run as $sy_list)
                                                        {
                                                            echo $sy_list['school_year'];
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "No SY Found";
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No SY Found";
                                                }
                                                
                                                ?>
                                            
                                            </td>
                                        <td><?= $row['semester']; ?></td>
                                        <td><?php 
                                            if ($row['status']==0) {
                                                echo "In Progress";
                                            } elseif ($row['status'] == 1) {
                                                echo "Finished";
                                            } elseif ($row['status'] == 2) {
                                                echo "TBD";
                                            } elseif ($row['status'] == 3) {
                                                echo "Cancelled";
                                            } else {
                                                echo "Unknown Status";
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <input type="checkbox" name="featured" value="<?= $row['id']; ?>" <?php if ($row['featured'] == 1) echo "checked"; ?>>
                                        </td>

                                        <td>
                                            <a href="project-edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                <button type="submit" name="project_delete_btn" value="<?=$post['id']?>" class="btn btn-danger deleteButton">Delete</button>
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
            var projectID = this.value;
            var isChecked = this.checked ? 1 : 0;

            // Send AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'javascript-update_featured_project.php', true);
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
            xhr.send('id=' + projectID + '&featured=' + isChecked);
        });
    });
</script>
        
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>