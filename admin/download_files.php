<?php
// Check if fileUrls are received
if(isset($_POST['fileUrls']) && !empty($_POST['fileUrls'])) {
    // Directory where downloaded files will be stored
    $downloadDirectory = '../uploads/project_documents/';

    // Create the directory if it doesn't exist
    if (!file_exists($downloadDirectory)) {
        mkdir($downloadDirectory, 0777, true);
    }

    // Loop through each file URL and download it
    foreach($_POST['fileUrls'] as $fileUrl) {
        // Extract filename from URL
        $fileName = basename($fileUrl);

        // Generate unique file path to avoid overwriting existing files
        $filePath = $downloadDirectory . uniqid() . '_' . $fileName;

        // Download the file using cURL
        $ch = curl_init($fileUrl);
        $fp = fopen($filePath, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);

        // Check if file was downloaded successfully
        if(file_exists($filePath)) {
            echo "File downloaded successfully: $fileName\n";
        } else {
            echo "Failed to download file: $fileName\n";
        }
    }
} else {
    // No fileUrls received
    echo "No file URLs received.";
}
?>
