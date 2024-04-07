<?php
// Include your database connection file
include('config/dbcon.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the article ID and featured status from the POST data
    $articleId = $_POST['id'];
    $featuredStatus = $_POST['featured'];

    // Prepare and execute the SQL query to update the 'featured' column
    $query = "UPDATE articles SET featured = ? WHERE id = ?";
    $statement = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($statement, 'ii', $featuredStatus, $articleId);
    $result = mysqli_stmt_execute($statement);

    // Check if the query was successful
    if ($result) {
        // Return a success message
        echo json_encode(['success' => true, 'message' => 'Featured status updated successfully']);
    } else {
        // Return an error message
        echo json_encode(['success' => false, 'message' => 'Error updating featured status']);
    }
} else {
    // Return an error message if the request method is not POST
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
