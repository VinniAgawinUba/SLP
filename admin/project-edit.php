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
                
            <?php include('message.php');?>

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Projects
                        <a href="project-view.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $project_id = $_GET['id'];
                        $project_query = "SELECT * FROM projects WHERE id = '$project_id' LIMIT 1";
                        $project_query_run = mysqli_query($con, $project_query);
                        if(mysqli_num_rows($project_query_run) > 0) 
                        {
                            $project_row = mysqli_fetch_array($project_query_run);
                        ?>
                       
                    
                       <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="project_id" value="<?= $project_row['id']?>">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" required class="form-control" value="<?= $project_row['name']?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Type</label>
                                <input type="text" name="type" required class="form-control" value="<?= $project_row['type']?>">
                            </div>
                            <!-- Add other project fields as needed -->

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" required rows="4"><?= $project_row['description']?></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Subject Hosted</label>
                                <input type="text" name="subject_hosted" required class="form-control" value="<?= $project_row['subject_hosted']?>">
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="">College</label>
                                <?php
                                $college_query = "SELECT * FROM college";
                                $college_query_run = mysqli_query($con, $college_query);
                                if(mysqli_num_rows($college_query_run) > 0) {
                                ?>
                                    <select name="college_id" required class="form-control select2">
                                        <option value="">--Select College--</option>
                                        <?php
                                        foreach($college_query_run as $college_list) {
                                        ?>
                                            <option value="<?=$college_list['id'];?>" <?= $college_list['id'] == $project_row['college_id'] ? 'selected' : '' ?>>
                                                <?= $college_list['name'];?>

                                                </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No College Found";
                                }
                                ?>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="">Department</label>
                                <?php
                                $department_query = "SELECT * FROM department";
                                $department_query_run = mysqli_query($con, $department_query);
                                if(mysqli_num_rows($department_query_run) > 0) {
                                ?>
                                    <select name="department_id" required class="form-control select2">
                                        <option value="">--Select Department--</option>
                                        <?php
                                        foreach($department_query_run as $department_list) {
                                        ?>
                                            <option value="<?=$department_list['id']; ?>" <?=$department_list['id'] == $project_row['department_id'] ? 'selected' : '' ?> >
                                                <?= $department_list['name'];?>
                                        
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No Department Found";
                                }
                                ?>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="">SD Coordinator</label>
                                <?php
                                $faculty_query = "SELECT * FROM faculty WHERE role = '1'";
                                $faculty_query_run = mysqli_query($con, $faculty_query);
                                if(mysqli_num_rows($faculty_query_run) > 0) {
                                ?>
                                    <select name="sd_coordinator_id" required class="form-control select2">
                                        <option value="">--Select Coordinator--</option>
                                        <?php
                                        foreach($faculty_query_run as $faculty_list) {
                                        ?>
                                            <option value="<?=$faculty_list['id']; ?>" <?=$faculty_list['id'] ==  $project_row['sd_coordinator_id'] ? 'selected' : '' ?>>
                                                <?= $faculty_list['fname'].'' .$faculty_list['lname'];?>
                                        
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No Faculty Found";
                                }
                                ?>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="">Partner</label>
                                <?php
                                $partner_query = "SELECT * FROM partners select2";
                                $partner_query_run = mysqli_query($con, $partner_query);
                                if(mysqli_num_rows($partner_query_run) > 0) {
                                ?>
                                    <select name="partner_id" required class="form-control select2">
                                        <option value="">--Select Partner--</option>
                                        <?php
                                        foreach($partner_query_run as $partner_list) {
                                        ?>
                                            <option value="<?=$partner_list['id']; ?>" <?=$partner_list['id'] ==  $project_row['partner_id'] ? 'selected' : '' ?>>
                                                <?= $partner_list['name'];?>
                            
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No Partners Found";
                                }
                                ?>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="">School Year</label>
                                <?php
                                $school_year_query = "SELECT * FROM school_year";
                                $school_year_query_run = mysqli_query($con, $school_year_query);
                                if(mysqli_num_rows($school_year_query_run) > 0) {
                                ?>
                                    <select name="school_year_id" required class="form-control select2">
                                        <option value="">--Select School Year--</option>
                                        <?php
                                        foreach($school_year_query_run as $school_year_list) {  
                                        ?>
                                            <option value="<?=$school_year_list['id']; ?>" <?=$school_year_list['id'] == $project_row['school_year_id'] ? 'selected' : ''  ?>>
                                                <?= $school_year_list['school_year'];?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                    echo "No School Year Found";
                                }
                                ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                    <label for="">Semester</label>
                                    <select name="semester" required class="form-control">
                                        <option value="">--Select Semester--</option>
                                        <option value="1"<?= $project_row['semester'] == '1' ? 'selected' : '' ?>>First Semester</option>
                                        <option value="2"<?= $project_row['semester'] == '2' ? 'selected' : '' ?>>Second Semester</option>
                                        <option value="3"<?= $project_row['semester'] == '3' ? 'selected' : '' ?>>Intersession Summer</option>
                                    </select>


                            </div>

                            <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <select name="status" required class="form-control">
                                        <option value="">--Select Status--</option>
                                        <option value="0"<?= $project_row['status'] == '0' ? 'selected' : '' ?>>In Progress</option>
                                        <option value="1"<?= $project_row['status'] == '1' ? 'selected' : '' ?>>Finished</option>
                                        <option value="2"<?= $project_row['status'] == '2' ? 'selected' : '' ?>>TBD</option>
                                        <option value="3"<?= $project_row['status'] == '3' ? 'selected' : '' ?>>Cancelled</option>
                                    </select>


                            </div>

                            <!-- Dynamic Faculty -->
                            <div class="col-md-3 mb-3" id="faculty-select-container">
                                <label for="">Faculty Members</label>
                                <?php
                                $project_faculty_query = "SELECT * FROM project_faculty WHERE project_id = '$project_id'";
                                $project_faculty_query_run = mysqli_query($con, $project_faculty_query);
                                $faculty_ids = array();
                                while ($project_faculty = mysqli_fetch_assoc($project_faculty_query_run)) {
                                    $faculty_ids[] = $project_faculty['faculty_id'];
                                }
                                echo json_encode($faculty_ids);

                                
                                foreach ($faculty_ids as $faculty_id) {
                                    $faculty_query = "SELECT * FROM faculty WHERE id = '$faculty_id'";
                                    $faculty_query_run = mysqli_query($con, $faculty_query);
                                    $faculty = mysqli_fetch_assoc($faculty_query_run);

                                    $all_faculty_query = "SELECT * FROM faculty";
                                    $all_faculty_query_run = mysqli_query($con, $all_faculty_query);
                                    if ($faculty) {
                                ?>
                                        <div class="faculty-select-wrapper">
                                            <select name="faculty[]" class="form-control select2">
                                                <option value="<?= $faculty['id'] ?>" selected><?= $faculty['fname'] . ' ' . $faculty['lname'] ?></option>
                                                <?php foreach ($all_faculty_query_run as $all_faculty) {
                                                    if ($all_faculty['id'] != $faculty['id']) {
                                                ?>
                                                        <option value="<?= $all_faculty['id'] ?>"><?= $all_faculty['fname'] . ' ' . $all_faculty['lname'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>

                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="project_id" value="<?= $project_id ?>">
                                                <input type="hidden" name="faculty_id" value="<?= $faculty['id'] ?>">
                                                <button type="submit" name="delete_project_faculty" class="btn btn-danger mt-2">Remove</button>
                                            </form>

                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <button type="button" class="btn btn-success mt-2" onclick="addFacultySelect()">Add Faculty</button>
                            </div>

                            <div class="col-md-12 mb-3 card">
                            <label for="">SDGs Covered</label><br>
                            <div class="row">
                                <?php
                                // Fetch the SDGs associated with the current project from the database
                                $project_id = $_GET['id'];
                                $project_sdgs_query = "SELECT sdg FROM project_sdgs WHERE project_id = '$project_id'";
                                $project_sdgs_query_run = mysqli_query($con, $project_sdgs_query);
                                $project_sdgs = array();
                                if(mysqli_num_rows($project_sdgs_query_run) > 0) {
                                    while($row = mysqli_fetch_assoc($project_sdgs_query_run)) {
                                        $project_sdgs[] = $row['sdg'];
                                    }
                                }

                                // Associative array mapping SDG names to their corresponding sdg_# format
                                $sdgs = array(
                                    'No Poverty' => 'sdg_1', 
                                    'Zero Hunger' => 'sdg_2', 
                                    'Good Health and Well-being' => 'sdg_3', 
                                    'Quality Education' => 'sdg_4', 
                                    'Gender Equality' => 'sdg_5', 
                                    'Clean Water and Sanitation' => 'sdg_6', 
                                    'Affordable and Clean Energy' => 'sdg_7', 
                                    'Decent Work and Economic Growth' => 'sdg_8', 
                                    'Industry, Innovation, and Infrastructure' => 'sdg_9', 
                                    'Reduced Inequality' => 'sdg_10', 
                                    'Sustainable Cities and Communities' => 'sdg_11', 
                                    'Responsible Consumption and Production' => 'sdg_12', 
                                    'Climate Action' => 'sdg_13', 
                                    'Life Below Water' => 'sdg_14', 
                                    'Life on Land' => 'sdg_15', 
                                    'Peace, Justice, and Strong Institutions' => 'sdg_16', 
                                    'Partnerships for the Goals' => 'sdg_17'
                                );

                                // Loop through SDGs array to create checkboxes and mark selected ones as checked
                                foreach ($sdgs as $sdg_name => $sdg_value) {
                                    $icon_path = '../uploads/SDGs/icons/' . $sdg_value . '.png'; // Path to the icon file
                                    echo '<div class="col-md-3 mb-2">';
                                    echo '<div class="form-check">';
                                    if (file_exists($icon_path)) {
                                        echo '<img src="' . $icon_path . '" alt="' . $sdg_name . '" class="sdg-icon img-fluid" style="height:100px; width:100px">';
                                    }
                                    $checked = in_array($sdg_value, $project_sdgs) ? 'checked' : '';
                                    echo '<input class="form-check-input" type="checkbox" name="sdgs[]" id="' . $sdg_value . '" value="'.$sdg_value.'" ' . $checked . '>';
                                    echo '<label class="form-check-label" for="' . $sdg_value . '">' . $sdg_name . '</label>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>




                            <!-- Upload project related files to project_documents -->
                            <div class="col-md-12 mb-3">
                                <label for="">Project Documents</label>
                                <input type="file" name="project_documents[]" multiple class="form-control">
                            </div>



                            <!-- Add other project fields as needed -->

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="project_edit_btn" class="btn btn-primary">Update Project</button>
                            </div>

                        </div>
                    </form>

                    <?php

                    }
                    else
                    {
                        ?>
                        <h4>No Record Found</h4>
                        <?php
                    }
                        
                    ?>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>


<?php
//Query all faculty from faculty table
$faculty_query = "SELECT * FROM faculty";
$faculty_query_run = mysqli_query($con, $faculty_query);
$faculties = array();
if(mysqli_num_rows($faculty_query_run) > 0) {
    while($faculty_row = mysqli_fetch_assoc($faculty_query_run)) {
        $faculties[] = $faculty_row;
    }
}
?>


<script>
    // Define a JavaScript variable to hold the faculty data
    var faculties = <?php echo json_encode($faculties); ?>;

    function addFacultySelect() {
        var container = document.getElementById("faculty-select-container");
        var wrapper = document.createElement("div");
        wrapper.classList.add("faculty-select-wrapper");

        var select = document.createElement("select");
        select.name = "faculty[]";
        select.required = true;
        select.classList.add("form-control", "select2");

        var option = document.createElement("option");
        option.value = "";
        option.text = "--Select Faculty--";
        select.appendChild(option);

        // Add faculty options from JavaScript variable
        faculties.forEach(function(faculty) {
            var option = document.createElement("option");
            option.value = faculty.id;
            option.text = faculty.fname + " " + faculty.lname;
            select.appendChild(option);
        });

        wrapper.appendChild(select);

        var removeBtn = document.createElement("button");
        removeBtn.type = "button";
        removeBtn.classList.add("btn", "btn-danger", "mt-2");
        removeBtn.textContent = "Remove";
        removeBtn.onclick = function() {
            container.removeChild(wrapper);
        };

        wrapper.appendChild(removeBtn);

        container.appendChild(wrapper);

        // Initialize Select2 for the new dropdown
        $(select).select2();
    }

    function removeFacultySelect(button) {
        var container = document.getElementById("faculty-select-container");
        var wrapper = button.parentNode;
        container.removeChild(wrapper);
    }
</script>


