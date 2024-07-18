<?php
include 'koneksi.php';


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare statement
    $sql = "DELETE FROM artikel WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Execute and check if successful
    if ($stmt->execute()) {
        echo "Artikel berhasil dihapus.";
    } else {
        echo "Gagal menghapus artikel: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the main page
    header("Location: ../admin/update-artikel.php");
    exit;
}
?>
