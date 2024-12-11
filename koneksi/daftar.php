<?php
session_start();
include 'koneksi.php'; // Pastikan Anda menyertakan koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Simpan password dalam bentuk teks biasa
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Pendaftaran berhasil, set session
        $_SESSION['username'] = $username; // Simpan username di session
        echo json_encode(['success' => true, 'username' => $username]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Terjadi kesalahan saat mendaftar.']);
    }

    $stmt->close();
    $conn->close();
}
?>