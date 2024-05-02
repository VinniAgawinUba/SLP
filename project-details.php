<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');

// Fetch all projects with matching id
if(isset($_GET['id'])) {
    $project_id = $_GET['id'];
    $query = "SELECT * FROM projects WHERE id = $project_id";
    $query_run = mysqli_query($con, $query);
} else {
    echo "Project ID not provided!";
}


?>

<div class="container">
    <div class="row">
        <?php
        if(mysqli_num_rows($query_run) > 0) {
            while($project = mysqli_fetch_assoc($query_run)) {
        ?>
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body" style="border:5px solid">
                    <div class="row">
                        <!-- Column 1 of Card-->
                        <div class="col-md-6" style="border:5px solid">
                            <h5 class="card-title"><?= $project['id']; ?></h5>
                            <p class="card-text"><?= $project['name']; ?></p>
                            <p class="card-text"><?= $project['description']; ?></p>
                            <p class="card-text"><?= $project['type']; ?></p>
                            <p class="card-text"><?= $project['subject_hosted']; ?></p>
                            <p class="card-text"><?= $project['college_id']; ?></p>
                            <p class="card-text"><?= $project['department_id']; ?></p>
                            <p class="card-text"><?= $project['sd_coordinator_id']; ?></p>
                            <p class="card-text"><?= $project['partner_id']; ?></p>
                            <p class="card-text"><?= $project['school_year_id']; ?></p>
                            <p class="card-text"><?= $project['semester']; ?></p>
                            <p class="card-text"><?= $project['status']; ?></p>
                            <p class="card-text"><?= $project['number_of_students']; ?></p>
                        </div>
                        <!-- Column 2 of Card-->
                        <div class="col-md-6" style="border:5px solid">
                            <p class="card-text"><?= $project['description']; ?></p>
                        </div>
                    </div>
                    <!--Row 2-->
                    <div class="row" style="border:3px solid">
                        <?php
                            //Get College id,name,logo from college table based on project's college_id on projects table
                            $college_id = $project['college_id'];
                            $query_college = "SELECT * FROM college WHERE id = $college_id";
                            $query_run_college = mysqli_query($con, $query_college);
                            
                            //Render College details (id, name, logo, dean_id)
                            if(mysqli_num_rows($query_run_college) > 0) {
                                $college = mysqli_fetch_assoc($query_run_college);
                            ?>
                            <div class="col-md-6">
                                <h5>College Details</h5>
                                <p>ID: <?= $college['id']; ?></p>
                                <p>Name: <?= $college['name']; ?></p>
                                <!-- Assuming logo is a file path -->
                                <p>Logo: <img src="uploads/college_logos/<?= $college['logo_image']; ?>" alt="College Logo" style="max-width: 100px;"></p>
                                <p>Dean: 
                                <?php
                                $dean_id = $college['dean_id'];
                                $query_faculty = "SELECT fname, lname FROM faculty WHERE id = $dean_id";
                                $query_run_faculty = mysqli_query($con, $query_faculty);

                                if(mysqli_num_rows($query_run_faculty) > 0) {
                                    $faculty = mysqli_fetch_assoc($query_run_faculty);
                                    echo $faculty['fname'] . ' ' . $faculty['lname'];
                                } else {
                                    echo "Dean not found!";
                                }
                                ?>
                                </p>
                            </div>
                            <?php
                            } else {
                                echo "College details not found!";
                            }
                     ?>

                            
                    </div>
                    <!--Row 3-->
                    <div class="row" style="border:3px solid">
                        <?php
                        //Get Involved Faculty from project_faculty table based on project_id
                        $query_faculty = "SELECT * FROM project_faculty WHERE project_id = $project_id";
                        $query_run_faculty = mysqli_query($con, $query_faculty);

                        if(mysqli_num_rows($query_run_faculty) > 0) {
                            while($faculty_row = mysqli_fetch_assoc($query_run_faculty)) {
                                $faculty_id = $faculty_row['faculty_id'];
                                $query_faculty_info = "SELECT * FROM faculty WHERE id = $faculty_id";
                                $query_run_faculty_info = mysqli_query($con, $query_faculty_info);

                                if(mysqli_num_rows($query_run_faculty_info) > 0) {
                                    $faculty_info = mysqli_fetch_assoc($query_run_faculty_info);
                        ?>
                        <div class="col-md-4">
                            <h5>Involved Faculty</h5>
                            <p>Name: <?= $faculty_info['fname'] . ' ' . $faculty_info['lname']; ?></p>
                            <!-- Assuming image is a file path -->
                            <p>Profile Pic: <img src="uploads/faculty/<?= $faculty_info['image']; ?>" alt="Faculty Image" style="max-width: 100px;"></p>
                        </div>
                        <?php
                                } else {
                                    echo "Faculty details not found!";
                                }
                            }
                        } else {
                            echo "No involved faculty found!";
                        }
                        ?>
                    </div>

                   <!--Row 4-->
                    <div class="row" style="border:3px solid">
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

                                // Loop through the checked SDGs and render their details
                                foreach ($project_sdgs as $sdg_value) {
                                    $sdg_name = array_search($sdg_value, $sdgs); // Get SDG name from the array
                                    $icon_path = 'uploads/SDGs/icons/' . $sdg_value . '.png'; // Path to the icon file
                                    echo '<div class="col-md-3 mb-2">';
                                    echo '<div class="form-check">';
                                    if (file_exists($icon_path)) {
                                        echo '<img src="' . $icon_path . '" alt="' . $sdg_name . '" class="sdg-icon img-fluid" style="height:100px; width:100px">';
                                    }
                                    echo '<input class="form-check-input" type="checkbox" name="sdgs[]" id="' . $sdg_value . '" value="'.$sdg_value.'" checked>';
                                    echo '<label class="form-check-label" for="' . $sdg_value . '">' . $sdg_name . '</label>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                    </div>
                 </div>
                </div>
                    <!-- You can add more details here as needed -->
                </div>
            </div>
        </div>
        
        <?php
            }
        } else {
            echo "No Projects found!";
        }
        ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>
