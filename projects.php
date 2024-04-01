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
     .card:hover {
        transform: scale(1.1); /* Increase scale on hover */
        transition: transform 0.3s ease; /* Add smooth transition */
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); /* Add box shadow for depth */
    }

    <?php 
    // Set the yellow tag based on the URL parameters
    if(!isset($_GET['school_year'])){
        $YellowTag = "YEARS";
    }
    else if (isset($_GET['school_year']) && !isset($_GET['semester'])){
        $YellowTag = "SEMESTER";
    }
    else if (isset($_GET['semester']) && isset($_GET['school_year']) && !isset($_GET['college'])){
        $YellowTag = "COLLEGES";
    }
    else if (!isset($_GET['department']) && isset($_GET['college']) && isset($_GET['school_year']) && isset($_GET['semester'])){
        $YellowTag = "DEPARTMENTS";
    }

    else if (isset($_GET['school_year']) && isset($_GET['semester']) && isset($_GET['college']) && isset($_GET['department'])) {
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
            <?=$YellowTag?>
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
                            <div class="col-md-3 mb-6 gy-3" style="display: flex; justify-content: center; flex-wrap: wrap">
                                <div class="card" id="<?= $card_id; ?>" onclick="handleCardClickSchool('<?= $item['id']; ?>')" style="height:15rem; background: url(assets/images/BGblueBook.png); background-size:300px; background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <h5 class="card-title text-white text-center"><?= $item['id']; ?></h5>
                                        <p class="card-text text-center" style="font-weight: bold; font-size:50px; color:#6ea6ff"><?= $item['school_year']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                } else if (!isset($_GET['semester'])) {
                    // Define static semesters
                    $semesters = array("1st Semester", "2nd Semester", "Intersession Summer");
                    foreach ($semesters as $key => $semester) {
                        // Generate a unique ID for each semester card
                        $card_id = 'semester_' . ($key + 1); // Add 1 to start IDs from 1
                ?>
                        <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;">
                            <!-- Add a unique ID to each semester card and attach a click event -->
                            <div class="card" id="<?= $card_id; ?>" onclick="handleCardClickSemester('<?= $key + 1; ?>')" style="height:15rem; background: url(assets/images/BGblueBook.png); background-size:300px; background-repeat:no-repeat;">
                                <div class="card-body">
                                    <h5 class="card-title text-white text-center"><?= $key + 1; ?></h5>
                                    <p class="card-text text-center" style="font-weight: bold; font-size:30px; color:#6ea6ff"><?= $semester; ?></p>
                                    <!-- You can add more project details here -->
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }

                else if (!isset($_GET['college'])) {
                    //If College is not set as a parameter, render Colleges
                    $query = "SELECT * FROM college";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'college_' . $item['id'];
                    ?>
                            <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;">
                                <div class="card" id="<?= $card_id; ?>" onclick="handleCardClickCollege('<?= $item['id']; ?>')" style="height:15rem; background: url(assets/images/BGblueBook.png); background-size:400px; background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <h5 class="card-title text-white text-center"><?= $item['id']; ?></h5>
                                        <p class="card-text text-center" style="font-weight: bold; font-size:30px; color:#6ea6ff"><?= $item['name']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                }
                
                else if (!isset($_GET['department'])) {
                    //If Department is not set as a parameter, render Departments
                    $query = "SELECT * FROM department";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'department_' . $item['id'];
                    ?>
                            <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;">
                                <div class="card" id="<?= $card_id; ?>" onclick="handleCardClickDepartment('<?= $item['id']; ?>')" style="height:15rem; background: url(assets/images/BGblueBook.png); background-size:400px; background-repeat:no-repeat;">
                                    <div class="card-body">
                                        <h5 class="card-title text-white text-center"><?= $item['id']; ?></h5>
                                        <p class="card-text text-center" style="font-weight: bold; font-size:30px; color:#6ea6ff"><?= $item['name']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                }

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
                                <div class="col-md-6 mb-3 gy-3" style="display: flex; justify-content: center; ">
                                <div class="card h-100" style="width: 15rem;">
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
                        }
                        else {
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
                $query = "SELECT * FROM posts LIMIT 3";
                $query_run = mysqli_query($con, $query);

                // Check if any posts are returned
                if (mysqli_num_rows($query_run) > 0) {
                    // Loop through the returned posts
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <!-- Display each article as a card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
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

