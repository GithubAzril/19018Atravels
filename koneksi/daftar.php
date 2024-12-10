<?php
session_start();
include 'koneksi.php'; // Pastikan Anda menyertakan koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Simpan password dalam bentuk teks biasa

    // Siapkan query untuk menyimpan data pengguna
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Pendaftaran berhasil
        echo json_encode(['success' => true, 'username' => $username]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Terjadi kesalahan saat mendaftar.']);
    }

    $stmt->close();
    $conn->close();
}
?>