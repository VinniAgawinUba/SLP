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
        margin-top: 99px;
    }


    #textfield {
        left: calc(50% - 798px/2 - 8px);
        width: 40%;
        margin-left: 20%;
        margin-bottom: 78px;
        border-radius: 15px;
        padding: 8px 12px;
        background: url("https://static.thenounproject.com/png/101791-200.png") no-repeat 10px;
        border: 3px solid #ccc;
        padding-left: 40px;
        background-size: 20px;
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
        margin-top: 36px;
        margin-bottom: 57px;
    }


    .year {
        border-radius: 20px;
        margin-top: 30px;

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

    /* Add hover effect for card */
    .year:hover {
        transform: scale(1.1);

        transition: transform 0.3s ease;

        box-shadow: 0px 0px 5px #FFFFFF;
        cursor: pointer;
    }

    #three-columns {
        flex-basis: 36px;
        margin: 29px;
    }

    #year-font-style {
        margin-top: calc(120px / 3);
        justify-content: center;
        text-align: center;
        white-space: pre-wrap;
        padding-bottom: 30px;
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

    #background-image {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 70vw;
        object-fit: contain;
    }

    body {
        margin-left: 100px;
        margin-right: 100px;
    }


    .school-year-header {
        display: flex;
        background-color: #A19158;
        padding: 15px 0;
        margin-left: -12px;
        margin-right: -12px;
        margin-top: -20px;
        justify-content: left;
        align-items: left;
        border-radius: 5px;
    }

    #year-header {
        padding: 20px;
        margin-left: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;

        color: #FFFFFF;
    }

    #sy {
        font-weight: 700;
        font-size: 20px;
        line-height: 16px;
        text-align: center;
        font-style: normal;
        color: #5C80FA;

        mix-blend-mode: normal;
    }

    #college-of {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 13px;
        line-height: 16px;
        text-align: center;
        letter-spacing: 0.205em;
        color: #5C80FA;

        mix-blend-mode: normal;
    }

    .header-container {
        display: flex;
        background-color: #A19158;
        padding: 15px 0;
        margin-left: -12px;
        margin-right: -12px;
        justify-content: left;
        align-items: left;
        border-radius: 5px;
    }

    #featured-header {
        padding: 20px;
        margin-left: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;

        color: #FFFFFF;
    }

    .featured-section {
        margin-top: -50px;
    }

    #background-image-featured {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 50vw;
        object-fit: contain;
        /* margin-top: 100px; */

    }

    .card-body-featured {
        background: #FFFFFF;
        border-radius: 10px;
        width: 303px;
        height: 475px;
    }

    .hidden {
        display: none;
    }

    .pagination {
        padding: 20px 0;
        margin-top: 20px;
        text-align: center;
        justify-content: center;
    }

    .pagination a {
        color: #283971;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #283971;
        color: white;
        border: 1px solid #283971;
    }

    .pagination a:hover:not(.active) {
        background-color: #ffff;
    }

    .card-body-featured {
        box-sizing: border-box;
        border-radius: 10px;
        height: 25em;
    }

    .card-title-featured {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 19px;
        padding: 10px;
        color: #000000;
    }

    .card-description-featured {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 15px;
        height: 41.75px;
        padding-left: 10px;
        margin-top: -10px;
        color: #000000;
    }
</style>
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
<h4 class="header">PROJECTS</h4>
<hr class="horizontal-line">
<input type="search" name="" id="textfield" placeholder="    Input search keywords...">
<span class="filter">Filter ↓</span>
<select name="" id="" class="filter-type">
    <option value="">Alphabetical A-Z</option>
    <option value="">Alphabetical Z-A</option>
</select>

<script>
    // Function to filter items based on search input
    function filterSY() {
        // Get the search input value
        var searchText = document.getElementById('textfield').value.toLowerCase();

        // Get all containers containing items to be filtered
        var containers = document.querySelectorAll('.col-md-3');

        // Loop through each container and hide/show based on the search text
        containers.forEach(function(container) {
            // Get the item within the container
            var item = container.querySelector('.card-body');

            // Get the text content of the item
            var itemText = item.textContent.toLowerCase();

            // Check if the item text contains the search text
            if (itemText.includes(searchText)) {
                // Show the container
                container.style.display = 'block';
            } else {
                // Hide the container
                container.style.display = 'none';
            }
        });
    }


    // Bind an event listener to the search input to trigger filterItems function on input change
    document.getElementById('textfield').addEventListener('input', filterSY);
</script>
<script>
    // Function to filter items based on search input
    function filterProject() {
        // Get the search input value
        var searchText = document.getElementById('textfield').value.toLowerCase();

        // Get all containers containing items to be filtered
        var containers = document.querySelectorAll('.col-md-3 mb-3 gy-3');

        // Loop through each container and hide/show based on the search text
        containers.forEach(function(container) {
            // Get the item within the container
            var item = container.querySelector('.card-body');

            // Get the text content of the item
            var itemText = item.textContent.toLowerCase();

            // Check if the item text contains the search text
            if (itemText.includes(searchText)) {
                // Show the container
                container.style.display = 'block';
            } else {
                // Hide the container
                container.style.display = 'none';
            }
        });
    }

    // Bind an event listener to the search input to trigger filterItems function on input change
    document.getElementById('textfield').addEventListener('input', filterProject);
</script>

<div class="container-fluid" id="background-image">
    <div class="row gy-3" style="display: flex; justify-content: center;">
        <div class="col-12">
            <!--Yellow Tag-->
            <div class="school-year-header">
                <!-- <img src="assets/images/Rectangle84.png">
                <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%, -50%); color: white; font-size: 36px; font-weight: bold;">
                    </div> -->
                <h5 id="year-header"><?= $YellowTag ?></h5>
            </div>
        </div>
        <div>
            <!-- 1st Row YEAR, SEM, PROJECTS,ETC. -->
            <div class="row">

                <?php
                // Define the number of school years per page
                $itemsPerPage = 12;

                // Get the current page number, default to 1 if not provided
                $page = isset($_GET['school_year_page']) ? $_GET['school_year_page'] : 1;

                // Calculate the offset for the SQL query
                $offset = ($page - 1) * $itemsPerPage;
                // Define the number of projects per page
                $projectsPerPage = 3;

                // Get the current page number for projects, default to 1 if not provided
                $projectPage = isset($_GET['project_page']) ? $_GET['project_page'] : 1;

                // Calculate the offset for the SQL query
                $projectOffset = ($projectPage - 1) * $projectsPerPage;

                // Query to retrieve school years with pagination
                $query = "SELECT * FROM school_year ORDER BY school_year DESC LIMIT $offset, $itemsPerPage";
                $query_run = mysqli_query($con, $query);

                //If School Year is not set as a parameter, render School Years
                if (!isset($_GET['school_year'])) {
                    $query = "SELECT * FROM school_year ORDER BY school_year DESC LIMIT $offset, $itemsPerPage";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'school_year_' . $item['id'];
                ?>
                            <div class="col-md-3 mb-6 gy-3" style="display: flex; justify-content: center; flex-wrap: wrap" id="three-columns">
                                <div class="year" id="<?= $card_id; ?>" onclick="handleCardClickSchool('<?= $item['id']; ?>')" style="text-align: center; justify-content: center;">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title text-white text-center"><?= $item['id']; ?></h5> -->
                                        <p class="card-text text-center" id="year-font-style"><span id="sy">SY</span> <br><?= $item['school_year']; ?></p>
                                        <!-- You can add more project details here -->
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                    }

                    // Get total number of school years
                    $totalSchoolYearsQuery = "SELECT COUNT(*) AS total FROM school_year";
                    $totalSchoolYearsResult = mysqli_query($con, $totalSchoolYearsQuery);
                    $totalSchoolYears = mysqli_fetch_assoc($totalSchoolYearsResult)['total'];

                    // Calculate total number of pages
                    $totalSchoolYearPages = ceil($totalSchoolYears / $itemsPerPage);

                    // Display pagination controls for school years
                    echo "<div class='pagination'>";
                    for ($i = 1; $i <= $totalSchoolYearPages; $i++) {
                        $active = $i == $page ? 'active' : '';
                        echo "<a href='?school_year_page=$i' class='page-link $active'>$i</a>";
                    }
                    echo "</div>";


                    // SEMESTER



                } else if (!isset($_GET['semester'])) {
                    // Define static semesters
                    $semesters = array("1st Semester", "2nd Semester", "Intersession");
                    foreach ($semesters as $key => $semester) {
                        // Generate a unique ID for each semester card
                        $card_id = 'semester_' . ($key + 1); // Add 1 to start IDs from 1
                        ?>
                        <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;" id="three-columns">
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
                            <div class="col-md-4 mb-6 gy-3" style="display: flex; justify-content: center;" id="three-columns">
                                <div class="year" id="<?= $card_id; ?>" onclick="handleCardClickCollege('<?= $item['id']; ?>')" style="background: url(assets/images/BGblueBook.png);">
                                    <div class="card-body">
                                        <h5 class="card-title text-white text-center"></h5>
                                        <p class="card-text text-center" id="college-font-style"> <span id="college-of">COLLEGE OF</span> <?= $item['name']; ?></p>
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
                    // DEPARTMENT


                } else if (!isset($_GET['department'])) {
                    //If Department is not set as a parameter, render Departments
                    $semester = $_GET['semester'];
                    $selectedSchoolYearId = $_GET['school_year'];
                    $selectedCollegeId = $_GET['college'];

                    //only show departments if there are existing projects associated with those departments for that timeframe, if not, show nothing and go back
                    $query = "SELECT * FROM projects, school_year, college, department 
                    WHERE projects.school_year_id = school_year.id 
                    AND projects.semester = $semester 
                    AND projects.college_id = $selectedCollegeId
                    AND projects.department_id = department.id 
                    AND school_year.id = $selectedSchoolYearId
                    GROUP BY department_id";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                            $card_id = 'department_' . $item['id'];
                        ?>
                            <div class="col-md-4 mb-6 gy-3" id="three-columns">
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
                    } else {
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
                    $query = "SELECT * FROM projects WHERE school_year_id = '$school_year' AND semester = '$semester' AND college_id = '$college' AND department_id = '$department' LIMIT $projectOffset, $projectsPerPage";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $item) {
                        ?>
                            <div class="col-md-3 mb-3 gy-3" style="display: flex; justify-content: center; ">
                                <div class="card">
                                    <a href="project-details.php?id=<?= $item['id']; ?>"><img src="" class="customPic"></a> <!-- Placeholder for image-->
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
                        // Get total number of projects
                        $totalProjectsQuery = "SELECT COUNT(*) AS total FROM projects WHERE school_year_id = '$school_year' AND semester = '$semester' AND college_id = '$college' AND department_id = '$department'";
                        $totalProjectsResult = mysqli_query($con, $totalProjectsQuery);
                        $totalProjects = 0; // Initialize totalProjects variable
                        if ($totalProjectsResult) {
                            $totalProjectsData = mysqli_fetch_assoc($totalProjectsResult);
                            if ($totalProjectsData && isset($totalProjectsData['total'])) {
                                $totalProjects = $totalProjectsData['total'];
                            }
                        }

                        // Calculate total number of pages for projects
                        $totalProjectPages = ceil($totalProjects / $projectsPerPage);


                        // Display pagination controls for projects
                        echo "<div class='pagination'>";
                        for ($i = 1; $i <= $totalProjectPages; $i++) {
                            $active = $i == $projectPage ? 'active' : '';
                            // Build the URL with existing parameters and the project_page parameter
                            $url = "projects.php?project_page=$i";
                            if (isset($_GET['school_year_page']))
                                $url .= "&school_year_page={$_GET['school_year_page']}";
                            if (isset($_GET['school_year']))
                                $url .= "&school_year={$_GET['school_year']}";
                            if (isset($_GET['semester']))
                                $url .= "&semester={$_GET['semester']}";
                            if (isset($_GET['college']))
                                $url .= "&college={$_GET['college']}";
                            if (isset($_GET['department']))
                                $url .= "&department={$_GET['department']}";
                            echo "<a href='$url' class='page-link $active'>$i</a>";
                        }
                        echo "</div>";
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
<div class="featured-section">

    <div class="container-fluid" id="background-image-featured">
        <div class="col-12">
            <!-- Yellow Tag -->
            <div class="header-container">
                <h5 id="featured-header">FEATURED</h5>
            </div>
        </div>
        <div class="mainContent">
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
                        <div class="row">
                            <div class="card-body-featured">
                            <a href="project-details.php?id=<?= $item['id']; ?>"><img src="assets/images/article-pic.png" class="customPic">
                                <h5 class="card-title-featured"><?= $row['name']; ?></h5>
                                <p class="card-description-featured"><?= $row['description']; ?></p>
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