<?php
// Include database connection and session start
require_once '../conn.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../../bantul_admin.php');
    exit();
}

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form inputs
    $objek = $_POST['objek'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];
    $latitude = $_POST['latitude'];
    $lng = $_POST['lng'];

    // File upload handling
    $targetDir = "../../img_maps/";
    $fileName = $_FILES["foto"]["name"];
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (!empty($fileName)) {
        // Validate file type
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFilePath)) {
                // Insert data into database
                $query = "INSERT INTO peternakan (objek, alamat, kategori, latitude, lng, foto) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('ssssss', $objek, $alamat, $kategori, $latitude, $lng, $fileName);

                if ($stmt->execute()) {
                    // Redirect to the page after successful insert
                    header('Location: ../../view/admin/sebaran_objek.php');
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, GIF files are allowed.";
        }
    } else {
        echo "Please select a file to upload.";
    }

    // Close statement and connection
    if (isset($stmt)) {
        $stmt->close();
    }
    $conn->close();
}
