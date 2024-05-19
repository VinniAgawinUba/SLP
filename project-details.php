<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');

// Fetch project details if id is provided
if (isset($_GET['id'])) {
    $project_id = $_GET['id'];
    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $query_run = $stmt->get_result();
} else {
    echo "Project ID not provided!";
    exit();
}
?>

<style>
    .project-image {
        width: 500px;
        margin-top: 50px;
        display: block;
        /* Ensures the image aligns correctly within its container */
    }

    .text-description {
        text-align: left;
        /* Changed from justify to left */
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 22px;
        color: #283971;
    }

    .card-title {
        margin-top: 50px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 900;
        font-size: 25px;
        line-height: 102.02%;
        letter-spacing: 0.2em;
        color: #283971;
        text-align: left;
        /* Ensure titles are left-aligned */
    }

    .card {
        border-radius: 10px;
        text-align: left;
        /* Align text inside the card to the left */
    }

    .card-status {
        width: 269px;
        height: 44px;
        border-radius: 0px 30px 30px 0px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 15px;
        line-height: 102.02%;
        color: #FFFFFF;
        padding: 14px 50px;
        text-align: left;
        /* Align status text to the left */
    }

    .card-text {
        font-family: 'Inter', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        margin-top: 5px;
        color: #283971;
        text-align: left;
        /* Align card text to the left */
    }

    .card-text strong {
        color: #283971;
    }

    .cards {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: left;
        /* Align content inside cards to the left */
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px 8px 0 0;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        /* Align header text to the left */
    }

    .container {
        margin-top: 20px;
        text-align: left;
        /* Ensure overall container aligns everything to the left */
    }

    .row {
        margin-bottom: 15px;
    }

    .sdg-icon {
        width: 50px;
    }

    .detail-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 29px;
        text-align: left;
        /* Align detailed titles to the left */
        letter-spacing: 0.2em;
        color: #283971;
    }

    .logo-name {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 23px;
        line-height: 28px;
        letter-spacing: 0.2em;
        color: #6E6E6E;
        width: 500px;
    }

    .dean-name {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 29px;
        color: #283971;
    }
</style>

<div class="container mt-4" id="container">
    <div class="row">
        <?php
        if ($query_run && mysqli_num_rows($query_run) > 0) {
            while ($project = mysqli_fetch_assoc($query_run)) {
        ?>
                <div class="col-md-12 mb-4">
                    <div class="cards shadow-sm" style="padding: 20px 60px;">
                        <div class="card-body">
                            <div class="row">
                                <!-- Column 1 of Card -->
                                <div class="col-md-6">
                                    <?php
                                    $project_id = $_GET['id'];
                                    $photo_query = "SELECT * FROM gallery_photos WHERE project_id = $project_id LIMIT 1";
                                    $photo_query_run = mysqli_query($con, $photo_query);

                                    if ($photo_query_run && mysqli_num_rows($photo_query_run) > 0) {
                                        $photo = mysqli_fetch_assoc($photo_query_run);
                                        echo '<img class="project-image" src="uploads/gallery_photos/' . $photo['file_name'] . '" alt="project photo">';
                                    } else {
                                        echo 'No project photo available.';
                                    }
                                    ?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="card-text"><strong>Type:</strong> <?= htmlspecialchars($project['type']); ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text"><strong>Subject Hosted:</strong> <?= htmlspecialchars($project['subject_hosted']); ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                // Fetch the college name based on the college_id
                                                $college_id = htmlspecialchars($project['college_id']);
                                                $stmt = $con->prepare("SELECT name FROM college WHERE id = ?");
                                                $stmt->bind_param("i", $college_id);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                $college_name = $result->num_rows > 0 ? $result->fetch_assoc()['name'] : 'Not Found';
                                                ?>
                                                <p class="card-text"><strong>College Name:</strong> <?= htmlspecialchars($college_name); ?></p>
                                            </div>

                                            <div class="col-md-6">
                                                <?php
                                                // Fetch the department name based on the department_id
                                                $department_id = htmlspecialchars($project['department_id']);
                                                $stmt = $con->prepare("SELECT name FROM department WHERE id = ?");
                                                $stmt->bind_param("i", $department_id);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                $department_name = $result->num_rows > 0 ? $result->fetch_assoc()['name'] : 'Not Found';
                                                ?>
                                                <p class="card-text"><strong>Department Name:</strong> <?= htmlspecialchars($department_name); ?></p>
                                            </div>

                                            <div class="col-md-6">
                                                <?php
                                                // Fetch the partner's name based on the partner_id
                                                $partner_id = htmlspecialchars($project['partner_id']);
                                                $stmt = $con->prepare("SELECT name FROM partners WHERE id = ?");
                                                $stmt->bind_param("i", $partner_id);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if ($result->num_rows > 0) {
                                                    $partner = $result->fetch_assoc();
                                                    $partner_name = $partner['name'];
                                                } else {
                                                    $partner_name = 'Not Found';
                                                }
                                                ?>
                                                <p class="card-text"><strong>Partner Name:</strong> <?= htmlspecialchars($partner_name); ?></p>
                                            </div>

                                            <div class="col-md-6">
                                                <?php
                                                // Fetch the school year based on the school_year_id
                                                $school_year_id = htmlspecialchars($project['school_year_id']);
                                                $stmt = $con->prepare("SELECT school_year FROM school_year WHERE id = ?");
                                                $stmt->bind_param("i", $school_year_id);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if ($result->num_rows > 0) {
                                                    $school_year = $result->fetch_assoc();
                                                    $school_year_label = $school_year['school_year'];
                                                } else {
                                                    $school_year_label = 'Not Found';
                                                }
                                                ?>
                                                <p class="card-text"><strong>School Year:</strong> <?= htmlspecialchars($school_year_label); ?></p>
                                            </div>

                                            <div class="col-md-12">
                                                <?php
                                                // Assuming $project['semester'] contains numerical codes
                                                $semester = htmlspecialchars($project['semester']);
                                                $semester_name = ''; // Initialize as empty string

                                                // Map numerical codes to semester names
                                                switch ($semester) {
                                                    case 1:
                                                        $semester_name = 'First Semester';
                                                        break;
                                                    case 2:
                                                        $semester_name = 'Second Semester';
                                                        break;
                                                    case 3:
                                                        $semester_name = 'Interssession';
                                                        break;
                                                    default:
                                                        $semester_name = 'Unknown Semester'; // Default case for unknown values
                                                }
                                                ?>
                                                <p class="card-text"><strong>Semester:</strong> <?= $semester_name; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Column 2 of Card -->
                                <div class="col-md-6">
                                    <h5 class="card-title"><?= htmlspecialchars($project['name']); ?></h5>
                                    <?php
                                    // Assuming $project['status'] contains the status value
                                    $statusText = '';
                                    $backgroundColor = '';

                                    switch ($project['status']) {
                                        case 0:
                                            $statusText = 'Ongoing';
                                            $backgroundColor = '#F4A836'; // Orange
                                            break;
                                        case 1:
                                            $statusText = 'Finished';
                                            $backgroundColor = '#28a745'; // Green
                                            break;
                                        case 2:
                                            $statusText = 'TBD';
                                            $backgroundColor = '#ffc107'; // Yellow
                                            break;
                                        case 3:
                                            $statusText = 'Cancelled';
                                            $backgroundColor = '#dc3545'; // Red
                                            break;
                                        default:
                                            $statusText = 'Unknown Status';
                                            $backgroundColor = '#6c757d'; // Gray
                                            break;
                                    }
                                    ?>

                                    <p class="card-status" style="background: <?= $backgroundColor; ?>;">
                                        Status: <?= $statusText; ?>
                                    </p>


                                    <p class="text-description"><?= htmlspecialchars($project['description']); ?></p>
                                </div>
                            </div>
                            <hr>
                            <!-- Row 2: College Details -->
                            <div class="row mt-4">
                                <?php
                                // Fetch college details
                                $stmt_college = $con->prepare("SELECT * FROM college WHERE id = ?");
                                $stmt_college->bind_param("i", $project['college_id']);
                                $stmt_college->execute();
                                $query_run_college = $stmt_college->get_result();

                                if ($query_run_college && mysqli_num_rows($query_run_college) > 0) {
                                    $college = mysqli_fetch_assoc($query_run_college);
                                ?>
                                    <div class="col-md-6">
                                        <h5 class="detail-title">COLLEGE DETAILS</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p><img src="uploads/college_logos/<?= htmlspecialchars($college['logo_image']); ?>" alt="College Logo" style="max-width: 200px;"></p>
                                                <p class="logo-name"><?= htmlspecialchars($college['name']); ?></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                       
                                        <p class="dean-name"><strong>Dean:</strong>
                                            <?php
                                            // Fetch dean details
                                            $stmt_faculty = $con->prepare("SELECT fname, lname FROM faculty WHERE id = ?");
                                            $stmt_faculty->bind_param("i", $college['dean_id']);
                                            $stmt_faculty->execute();
                                            $query_run_faculty = $stmt_faculty->get_result();

                                            if ($query_run_faculty && mysqli_num_rows($query_run_faculty) > 0) {
                                                $faculty = mysqli_fetch_assoc($query_run_faculty);
                                                echo htmlspecialchars($faculty['fname'] . ' ' . $faculty['lname']);
                                            } else {
                                                echo "Dean not found!";
                                            }
                                            ?>
                                        </p>

                                        <?php
                                        // Fetch involved faculty
                                        $stmt_project_faculty = $con->prepare("SELECT * FROM project_faculty WHERE project_id = ?");
                                        $stmt_project_faculty->bind_param("i", $project_id);
                                        $stmt_project_faculty->execute();
                                        $query_run_faculty = $stmt_project_faculty->get_result();

                                        if ($query_run_faculty && mysqli_num_rows($query_run_faculty) > 0) {
                                            echo '<div class="col-md-12"><h5>Involved Faculty</h5></div>';
                                            while ($faculty_row = mysqli_fetch_assoc($query_run_faculty)) {
                                                $stmt_faculty_info = $con->prepare("SELECT * FROM faculty WHERE id = ?");
                                                $stmt_faculty_info->bind_param("i", $faculty_row['faculty_id']);
                                                $stmt_faculty_info->execute();
                                                $query_run_faculty_info = $stmt_faculty_info->get_result();

                                                if ($query_run_faculty_info && mysqli_num_rows($query_run_faculty_info) > 0) {
                                                    $faculty_info = mysqli_fetch_assoc($query_run_faculty_info);
                                        ?>
                                                    <div class="col-md-12 mb-4">
                                                        <p><strong>Name:</strong> <?= htmlspecialchars($faculty_info['fname'] . ' ' . $faculty_info['lname']); ?></p>
                                                        <!-- Assuming image is a file path -->
                                                        <p><strong>Profile Pic:</strong> <img src="uploads/faculty/<?= htmlspecialchars($faculty_info['image']); ?>" alt="Faculty Image" class="img-fluid rounded-circle" style="max-width: 100px;"></p>
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
                                <?php
                                } else {
                                    echo "College details not found!";
                                }
                                ?>
                            </div>
                            <hr>
                            <!-- Row 3: Involved Faculty -->
                       
                            <!-- Row 4: SDGs Covered -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>SDGs Covered</h5>
                                    <div class="row">
                                        <?php
                                        // Fetch SDGs associated with the project
                                        $stmt_project_sdgs = $con->prepare("SELECT sdg FROM project_sdgs WHERE project_id = ?");
                                        $stmt_project_sdgs->bind_param("i", $project_id);
                                        $stmt_project_sdgs->execute();
                                        $project_sdgs_query_run = $stmt_project_sdgs->get_result();
                                        $project_sdgs = array();

                                        if ($project_sdgs_query_run && mysqli_num_rows($project_sdgs_query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($project_sdgs_query_run)) {
                                                $project_sdgs[] = $row['sdg'];
                                            }
                                        }

                                        // Associative array mapping SDG names to their corresponding sdg_# format
                                        $sdgs = array(
                                            'No Poverty',
                                            'Zero Hunger',
                                            'Good Health and Well-being',
                                            'Quality Education',
                                            'Gender Equality',
                                            'Clean Water and Sanitation',
                                            'Affordable and Clean Energy',
                                            'Decent Work and Economic Growth',
                                            'Industry, Innovation, and Infrastructure',
                                            'Reduced Inequality',
                                            'Sustainable Cities and Communities',
                                            'Responsible Consumption and Production',
                                            'Climate Action',
                                            'Life Below Water',
                                            'Life on Land',
                                            'Peace, Justice, and Strong Institutions',
                                            'Partnerships for the Goals'
                                        );


                                        // Loop through the checked SDGs and render their details
                                        foreach ($project_sdgs as $sdg_value) {
                                            $sdg_name = array_search($sdg_value, $sdgs); // Get SDG name from the array
                                            $icon_path = 'uploads/SDGs/icons/' . htmlspecialchars($sdg_value) . '.png'; // Path to the icon file
                                            echo '<div class="col-md-3 mb-2">';
                                            echo '<div class="form-check">';
                                            if (file_exists($icon_path)) {
                                                echo '<img src="' . $icon_path . '" alt="' . htmlspecialchars($sdg_name) . '" class="sdg-icon img-fluid mb-2" style="height:200px; width:200px">';
                                            }
                                            // echo '<input class="form-check-input" type="checkbox" name="sdgs[]" id="' . htmlspecialchars($sdg_value) . '" value="'.htmlspecialchars($sdg_value).'" checked>';
                                            echo '<label class="form-check-label" for="' . htmlspecialchars($sdg_value) . '">' . htmlspecialchars($sdg_name) . '</label>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
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
            echo "<div class='alert alert-warning' role='alert'>No Projects found!</div>";
        }
?>
</div>
</div>

<?php include('includes/footer.php'); ?>