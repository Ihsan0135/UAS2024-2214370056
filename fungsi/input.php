<?php
include'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_artikel = $_POST['nama_artikel'];
    $tag = $_POST['tag'];
    $kategori = $_POST['kategori'];
    $artikel_file = $_FILES['artikel_file'];
    $gambar_file = $_FILES['gambar_file'];

    // Fungsi untuk mengkonversi file ke BLOB
    function fileToBlob($file) {
        $filePath = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileContent = file_get_contents($filePath);
        return $fileContent;
    }

    $artikel_blob = fileToBlob($artikel_file);
    $gambar_blob = isset($gambar_file['tmp_name']) ? fileToBlob($gambar_file) : null;

    $stmt = $conn->prepare("INSERT INTO artikel (nama_artikel, tag, kategori, artikel, gambar) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama_artikel, $tag, $kategori, $artikel_blob, $gambar_blob);

    if ($stmt->execute()) {
        header("Location: ../admin/update-artikel.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    
}
?>
