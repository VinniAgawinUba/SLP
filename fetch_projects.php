<?php
// Include necessary files and establish database connection
include('config/dbcon.php');

// Retrieve filter criteria from the request parameters
$collegeId = $_GET['college'] ?? null;
$schoolYearId = $_GET['school_year'] ?? null;

// Initialize an empty variable to store the HTML content of projects
$projectsHtml = '';

// Construct the SQL query based on the filter criteria
$query = "SELECT * FROM projects";
if ($collegeId !== null) {
    $query .= " WHERE college_id = $collegeId";
    if ($schoolYearId !== null) {
        $query .= " AND school_year_id = $schoolYearId";
    }
} elseif ($schoolYearId !== null) {
    $query .= " WHERE school_year_id = $schoolYearId";
}

// Execute the query
$result = mysqli_query($con, $query);

// Check if any projects were found
if ($result && mysqli_num_rows($result) > 0) {
    // Loop through each project and generate HTML output
    while ($project = mysqli_fetch_assoc($result)) {
        // Here you can customize the HTML structure for each project card
        $projectsHtml .= '<div class="card">';
        $projectsHtml .= '<div class="card-body">';
        $projectsHtml .= '<h5 class="card-title">' . $project['name'] . '</h5>';
        // Add more project details as needed
        $projectsHtml .= '</div>';
        $projectsHtml .= '</div>';
    }
} else {
    // No projects found
    $projectsHtml = '<p>No projects found.</p>';
}

// Output the HTML content of projects
echo $projectsHtml;

// Close the database connection
mysqli_close($con);
?>
