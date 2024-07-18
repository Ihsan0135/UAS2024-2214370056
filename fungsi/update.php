<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $nama_artikel = $_POST['nama_artikel'];
    $tag = $_POST['tag'];
    $kategori = $_POST['kategori'];

    $sql = "UPDATE artikel SET nama_artikel=?, tag=?, kategori=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nama_artikel, $tag, $kategori, $id);

    if ($stmt->execute()) {
         header("location: ../admin/update-artikel.php");
    } else {
        echo "Gagal mengupdate artikel: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
