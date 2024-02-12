<?php
session_start();
// Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<link rel="stylesheet" href="assets/css/custom.css">

<div class="container-fluid custombg-image-row">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 fixed-left" style="width:350px">
            <?php include('includes/sidebar.php'); ?>
        </div>

        <!-- Main Body -->
        <div class="col-md-9">
            <div class="">
                <div class="row ">
                    <div class="col-md-12">
                        <?php include('message.php'); ?>
                        <div class="card-header">
                            <h4 class="card-title text-center customHome">Projects</h4>
                        </div>
                    </div>
                </div>
                <div class="row customHome">
                    <div class="col-md-12 mb-4">
                        <!-- Filter Form -->
                        <form id="filterForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="college">Filter by College</label>
                                    <select class="form-control" id="college" name="college">
                                        <option value="">Select College</option>
                                        <?php
                                        // Retrieve all colleges
                                        $query = "SELECT * FROM college";
                                        $query_run = mysqli_query($con, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $college) {
                                                echo "<option value='" . $college['id'] . "'>" . $college['name'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="school_year">Filter by School Year</label>
                                    <select class="form-control" id="school_year" name="school_year">
                                        <option value="">Select Year</option>
                                        <?php
                                        // Retrieve all school years
                                        $query = "SELECT * FROM school_year";
                                        $query_run = mysqli_query($con, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $year) {
                                                echo "<option value='" . $year['id'] . "'>" . $year['school_year'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="projectContainer" class="col-md-12">
                        <!-- Projects will be displayed here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>

<script>
    // Function to fetch and display projects based on filter criteria
    function fetchProjects() {
        var collegeId = document.getElementById('college').value;
        var schoolYearId = document.getElementById('school_year').value;

        // Fetch projects based on filter criteria
        fetch(`fetch_projects.php?college=${collegeId}&school_year=${schoolYearId}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('projectContainer').innerHTML = data;
            });
    }

    // Initial fetch when the page loads
    fetchProjects();

    // Event listener for changes in filter criteria
    document.getElementById('filterForm').addEventListener('change', function() {
        fetchProjects();
    });
</script>
