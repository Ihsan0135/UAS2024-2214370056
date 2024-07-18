<?php
require_once 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember']) ? 1 : 0;

    // Menggunakan prepared statement untuk mencegah SQL injection
    $sql = "SELECT id, email, password FROM admin WHERE email=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $email, $password);
        $stmt->fetch();

        // Mengatur sesi untuk pengguna yang berhasil login
        $_SESSION['user_id'] = $id;
        $_SESSION['email'] = $email;

        if ($id == 1) {
            header("Location: ../admin/beranda.php");
        } else {
            header("Location: ../user/index.php");
        }
        $stmt->close();
        $conn->close();
        exit();
    } else {
        // Redirect jika login gagal
        $stmt->close();
        $conn->close();
        header("Location: ../login.php?error=invalid_login");
        exit();
    }
}
?>
