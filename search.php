<?php
// Include necessary files and database connection
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');


// Check if search query is submitted
if (isset($_GET['query'])) {
    // Parse the search query submitted by the user
    $searchQuery = $_GET['query'];

    // Construct SQL queries to search across relevant columns in different tables
    $sqlArticles = "SELECT * FROM articles WHERE name LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
    $sqlProjects = "SELECT * FROM projects WHERE name LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
    $sqlGallery = "SELECT * FROM gallery WHERE name LIKE '%$searchQuery%'";
    $sqlPartners = "SELECT * FROM partners WHERE name LIKE '%$searchQuery%'";
    $sqlFaculty = "SELECT * FROM faculty WHERE fname LIKE '%$searchQuery%' OR lname LIKE '%$searchQuery%'";

    // Execute the SQL queries
    $resultArticles = mysqli_query($con, $sqlArticles);
    $resultProjects = mysqli_query($con, $sqlProjects);
    $resultGallery = mysqli_query($con, $sqlGallery);
    $resultPartners = mysqli_query($con, $sqlPartners);
    $resultFaculty = mysqli_query($con, $sqlFaculty);

    // Display the search results
    echo "<div class='container'>";
    echo "<h1>Search Results for '$searchQuery'</h1>";

    // Display search results for Articles
    echo "<div class='search-results'>";
    echo "<h2>Articles</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultArticles)) {
        $postId = $row['id'];
        $postName = $row['name'];
        // Construct URL for article-view.php
        $url = "article-view.php?id=$postId";
        echo "<li><a href='$url'>$postName</a></li>";
    }
    echo "</ul>";
    echo "</div>";

    // Display search results for projects
    echo "<div class='search-results'>";
    echo "<h2>Projects</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultProjects)) {
        $projectId = $row['id'];
        $projectName = $row['name'];
        // Construct URL for project-details.php
        $url = "project-details.php?id=$projectId";
        echo "<li><a href='$url'>$projectName</a></li>";
    }
    echo "</ul>";
    echo "</div>";

    // Display search results for gallery
    echo "<div class='search-results'>";
    echo "<h2>Gallery</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultGallery)) {
        $galleryId = $row['id'];
        $galleryName = $row['name'];
        // Construct URL for gallery-view.php
        $url = "gallery-view.php?id=$galleryId";
        echo "<li><a href='$url'>$galleryName</a></li>";
    }
    echo "</ul>";
    echo "</div>";

    // Display search results for partners
    // Similarly construct URLs for partners and faculty

    echo "</div>"; // Close container

} else {
    // If search query is not submitted, show a message
    echo "<div class='container'>";
    echo "<h1>No search query submitted.</h1>";
    echo "</div>"; // Close container
}

// Include footer
include('includes/footer.php');
?>
