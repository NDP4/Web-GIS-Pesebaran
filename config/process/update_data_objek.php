<?php
require_once '../conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $objek = filter_input(INPUT_POST, 'objek', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $kategori = filter_input(INPUT_POST, 'kategori', FILTER_SANITIZE_STRING);
    $latitude = filter_input(INPUT_POST, 'latitude', FILTER_SANITIZE_STRING);
    $lng = filter_input(INPUT_POST, 'lng', FILTER_SANITIZE_STRING);

    // Update data in database
    $query = "UPDATE peternakan SET objek = ?, alamat = ?, kategori = ?, latitude = ?, lng = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssi', $objek, $alamat, $kategori, $latitude, $lng, $id);

    if ($stmt->execute()) {
        // Update foto if provided
        if ($_FILES['foto']['name']) {
            $targetDir = "../../img_maps/";
            $fileName = basename($_FILES['foto']['name']);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('jpg', 'jpeg', 'png');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
                    // Update database with new filename
                    $queryFoto = "UPDATE peternakan SET foto = ? WHERE id = ?";
                    $stmtFoto = $conn->prepare($queryFoto);
                    $stmtFoto->bind_param('si', $fileName, $id);
                    $stmtFoto->execute();
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
            }
        }
        header("Location: ../../view/admin/sebaran_objek.php");
    } else {
        echo "Error updating data: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: ../../error.php");
    exit();
}
