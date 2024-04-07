<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">
<style>
    .header {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 58px;
        text-align: center;

        color: #283971;
        margin-top: 40px;
    }

    #main-image {
        margin-top: 10px;
    }

    #textfield {
        border: 4px solid #435283;
        border-radius: 15px;
        left: calc(50% - 798px/2 - 8px);
        width: 40%;
        margin-left: 20%;
        margin-top: 60px;
    }

    ::placeholder {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 16px;
        letter-spacing: 0.205em;

        color: rgba(40, 57, 113, 0.47);
    }

    .filter {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 15px;
        text-align: center;
        letter-spacing: 0.2em;

        color: #6F6F6F;
        margin-left: 100px;
    }

    .filter-type {
        background: #283971;
        border-radius: 30px;
        width: 157.07px;
        height: 38.96px;
        border: none;
        padding: 8px;
        color: #FFFFFF;
        font-weight: bold;
        border: none;
        text-decoration: none;
    }

    .horizontal-line {
        background-color: #283971;
        width: 50%;
        margin: auto;
        border-top: 4px solid #283971 !important;
        border-radius: 14px;
    }

    /* Add hover effect for card */
    .year:hover {
        transform: scale(1.1);

        transition: transform 0.3s ease;

        box-shadow: 0px 0px 5px #FFFFFF;
        cursor: pointer;
    }

    .year {
        border-radius: 20px;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        line-height: 36px;

        width: 300px;
        height: 178px;
        color: #89A5FF;
        background: url(assets/images/BGbluebook.png);
        padding: 50px;
        padding-top: 10px;

    }

    #three-columns {
        flex-basis: 36px;
        margin: 29px;
    }

    #year-font-style {
        margin-top: calc(178px / 3);
        justify-content: center;
        text-align: center;
        white-space: pre-wrap;
    }

    #semester-font-style {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 160px;
        font-size: 36px;

    }

    #college-font-style {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 160px;
        font-size: 36px;

    }

    #department-font-style {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 160px;
        font-size: 36px;
    }

    #projects-font-style {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 160px;
        font-size: 36px;

    }

    #project-card {
        box-sizing: border-box;
        background: #FFFFFF;
        border-radius: 10px;
        width: 222px;
        height: auto;
    }

    <?php
    // Set the yellow tag based on the URL parameters
    if (!isset($_GET['school_year'])) {
        $YellowTag = "SCHOOL YEAR";
    } else if (isset($_GET['school_year']) && !isset($_GET['semester'])) {
        $YellowTag = "SEMESTER";
    } else if (isset($_GET['semester']) && isset($_GET['school_year']) && !isset($_GET['college'])) {
        $YellowTag = "COLLEGES";
    } else if (!isset($_GET['department']) && isset($_GET['college']) && isset($_GET['school_year']) && isset($_GET['semester'])) {
        $YellowTag = "DEPARTMENTS";
    } else if (isset($_GET['school_year']) && isset($_GET['semester']) && isset($_GET['college']) && isset($_GET['department'])) {
        $YellowTag = "PROJECTS";
    }

    ?>
</style>
<h4 class="header">Projects</h4>
<hr class="horizontal-line">
<input type="search" name="" id="textfield" placeholder="    Input search keywords...">
<span class="filter">Filter ↓</span>
<select name="" id="" class="filter-type">
    <option value="">Alphabetical</option>
    <option value="">Year</option>
    <option value="">Department</option>
</select>
<div class="container-fluid custombg-image-row " id="main-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">

        <div class="col-12">
            <!--Yellow Tag-->
            <div style="position: relative;">
                <img src="assets/images/Rectangle84.png">
                <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%, -50%); color: white; font-size: 36px; font-weight: bold;">
                    <?= $YellowTag ?>
                </div>
            </div>
        </div>

        <div class="mainContent">

            <!-- 1st Row YEAR, SEM, PROJECTS,ETC. -->
            <div class="row">

                <?php
                //If School Year is not set as a parameter, render School Years
                if (!isset($_GET['school_year'])) {
                    $query = "SELECT * FROM school_year ORDER BY school_year DESC";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'school_year_' . $item['id'];
                ?>
                            <div class="col-md-3 mb-6 gy-3" style="display: flex; justify-content: center; flex-wrap: wrap" id="three-columns">
                                <div class="year" id="<?= $card_id; ?>" onclick="handleCardClickSchool('<?= $item['id']; ?>')" style="text-align: center; justify-content: center;">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title text-white text-center"><?= $item['id']; ?></h5> -->
                                        <p class="card-text text-center" id="year-font-style">SY <?= $item['school_year']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                    }

                    // Semester Cards
                    // Shows Semester Buttons and functional
                    // SQL queries using PHP
                } else if (!isset($_GET['semester'])) {
                    // Define static semesters
                    $semesters = array("1st Semester", "2nd Semester", "Intersession");
                    foreach ($semesters as $key => $semester) {
                        // Generate a unique ID for each semester card
                        $card_id = 'semester_' . ($key + 1); // Add 1 to start IDs from 1
                        ?>
                        <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;">
                            <!-- Add a unique ID to each semester card and attach a click event -->
                            <div class="year" id="<?= $card_id; ?>" onclick="handleCardClickSemester('<?= $key + 1; ?>')" style="background: url(assets/images/BGblueBook.png);">
                                <div class="card-body">
                                    <h5 class="card-title text-white text-center"></h5>
                                    <p class="card-text text-center" id="semester-font-style"><?= $semester; ?></p>
                                    <!-- You can add more project details here -->
                                </div>
                            </div>
                        </div>
                        <?php
                    }


                    // COLLEGE CARDS

                } else if (!isset($_GET['college'])) {
                    //If College is not set as a parameter, render Colleges
                    $semester = $_GET['semester'];
                    $selectedSchoolYearId = $_GET['school_year'];
                    //only show colleges if there are existing projects assoxciated with those colleges for that timeframe, if not, show nothing and go back 
                    $query = "SELECT * FROM projects
                    INNER JOIN school_year ON projects.school_year_id = school_year.id
                    INNER JOIN college ON projects.college_id = college.id
                    WHERE projects.semester = $semester
                    AND school_year.id = $selectedSchoolYearId
                    GROUP BY college_id";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'college_' . $item['id'];
                        ?>
                            <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;">
                                <div class="year" id="<?= $card_id; ?>" onclick="handleCardClickCollege('<?= $item['id']; ?>')" style="background: url(assets/images/BGblueBook.png);">
                                    <div class="card-body">
                                        <h5 class="card-title text-white text-center"></h5>
                                        <p class="card-text text-center" id="college-font-style"><?= $item['name']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    else {
                        // If no projects are found, echo no projects found tag
                        echo "<h1 class='text-white'>No projects found Will go back in 3 seconds</h1>";
                        //Go back to the previous page
                        echo "<script>setTimeout(\"location.href = 'projects.php';\",3000);</script>";
                    }


                    // DEPARTMENT


                } else if (!isset($_GET['department'])) {
                    //If Department is not set as a parameter, render Departments
                    $semester = $_GET['semester'];
                    $selectedSchoolYearId = $_GET['school_year'];
                    //only show departments if there are existing projects associated with those departments for that timeframe, if not, show nothing and go back
                    $query = "SELECT * FROM projects, school_year, college, department 
                    WHERE projects.school_year_id = school_year.id 
                    AND projects.semester = $semester 
                    AND projects.college_id = college.id 
                    AND projects.department_id = department.id 
                    AND school_year.id = $selectedSchoolYearId
                    GROUP BY department_id";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'department_' . $item['id'];
                        ?>
                            <div class="col-md-4 mb-6 gy-3">
                                <div class="year" id="<?= $card_id; ?>" onclick="handleCardClickDepartment('<?= $item['id']; ?>')" style="background: url(assets/images/BGblueBook.png);">
                                    <div class="card-body">
                                        <h5 class="card-title text-white text-center"></h5>
                                        <p class="card-text text-center" id="department-font-style"><?= $item['name']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                    }
                    else {
                        // If no projects are found, echo no projects found tag
                        echo "<h1 class='text-white'>No projects found Will go back in 3 seconds</h1>";
                        //Go back to the previous page
                        echo "<script>setTimeout(\"location.href = 'projects.php';\",3000);</script>";
                    }
                }


                // PROJECTS

                //If Everything is set render all requests with matching paramaters
                else if (isset($_GET['school_year']) && isset($_GET['semester']) && isset($_GET['college']) && isset($_GET['department'])) {
                    $school_year = $_GET['school_year'];
                    $semester = $_GET['semester'];
                    $college = $_GET['college'];
                    $department = $_GET['department'];
                    $query = "SELECT * FROM projects WHERE school_year_id = '$school_year' AND semester = '$semester' AND college_id = '$college' AND department_id = '$department'";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                        ?>
                            <div class="col-md-6 mb-3 gy-3" style="display: flex; justify-content: center; " id="three-columns">
                                <div class="card h-100" id="project-card">
                                    <a href="#"><img src="" class="customPic"></a> <!-- Placeholder for image-->
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $item['name']; ?></h5>
                                        <p class="card-text">Description:<?= $item['description']; ?></p>
                                        <p class="card-text">Type:<?= $item['type']; ?></p>
                                        <h5 class="card-title">Subject Hosted:<?= $item['subject_hosted']; ?></h5>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    } else {
                        // If no projects are found, echo no projects found tag
                        echo "<h1 class='text-white'>No projects found Will go back in 3 seconds</h1>";
                        //Go back to the previous page
                        echo "<script>setTimeout(\"location.href = 'projects.php';\",3000);</script>";
                    }
                }


                ?>
            </div>


        </div>

    </div>
</div>

<!-- Featured Section -->
<div class="row">
    <div class="col-12">
        <!-- Yellow Tag -->
        <div style="position: relative;">
            <img src="assets/images/Rectangle84.png">
            <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%, -50%); color: white; font-size: 36px; font-weight: bold;">
                FEATURED
            </div>
        </div>
    </div>

    <div class="mainContent" style="border:5px solid">
        <?php
        // Fetch 3 articles
        $query = "SELECT * FROM projects WHERE featured=1 LIMIT 3";
        $query_run = mysqli_query($con, $query);

        // Check if any posts are returned
        if (mysqli_num_rows($query_run) > 0) {
            // Loop through the returned posts
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
                <!-- Display each article as a card -->
                <div class="col-md-4 mb-4">
                    <div class="year">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name']; ?></h5>
                            <p class="card-text"><?= $row['description']; ?></p>
                            <!-- You can add more post details here -->
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            // If no articles are found, display a message
            echo "<div class='col-12'><p>No featured articles available.</p></div>";
        }
        ?>
    </div>
</div>



</div>

</div>

<!-- JavaScript function to handle card click events and update URL -->
<script>
    function handleCardClickSchool(schoolYearId) {
        // Encode the clicked school year ID into the URL
        var url = new URL(window.location.href);
        url.searchParams.set('school_year', schoolYearId);
        window.location.href = url.toString();
    }

    function handleCardClickSemester(schoolYearId) {
        // Encode the clicked school year ID into the URL
        var url = new URL(window.location.href);
        url.searchParams.set('semester', schoolYearId);
        window.location.href = url.toString();
    }

    function handleCardClickCollege(schoolYearId) {
        // Encode the clicked school year ID into the URL
        var url = new URL(window.location.href);
        url.searchParams.set('college', schoolYearId);
        window.location.href = url.toString();
    }

    function handleCardClickDepartment(schoolYearId) {
        // Encode the clicked school year ID into the URL
        var url = new URL(window.location.href);
        url.searchParams.set('department', schoolYearId);
        window.location.href = url.toString();
    }
</script>



<!-- Footer -->
<?php include('includes/footer.php'); ?>