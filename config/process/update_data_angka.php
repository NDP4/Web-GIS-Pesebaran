<?php
require_once '../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $wilayah = $_POST['wilayah'];
    $tahun_2023 = $_POST['tahun_2023'];

    $query = "UPDATE jumlah_penduduk SET wilayah = ?, tahun_2023 = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sii', $wilayah, $tahun_2023, $id);

    if ($stmt->execute()) {
        header('Location: ../../view/admin/sebaran_angka.php');
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
