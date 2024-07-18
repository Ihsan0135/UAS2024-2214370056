<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT artikel FROM artikel WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($artikel);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    if ($artikel) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="artikel.pdf"');
        echo $artikel;
    } else {
        echo "File not found.";
    }
}
?>
