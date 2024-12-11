<?php
include("koneksi.php");
// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['login-password'];

// Mencari user di database
$sql = "SELECT * FROM users WHERE username = ?"; // Ganti 'users' dengan nama tabel Anda
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verifikasi password
    if (password_verify($password, $user['password'])) { // Pastikan password disimpan dengan hash
        // Login berhasil
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; // Misalnya, 'admin' atau 'user'
        
        echo json_encode(['success' => true, 'role' => $user['role'], 'username' => $user['username']]);
    } else { 
        // Password salah
        echo json_encode(['success' => false, 'message' => 'Password salah.']);
    }
} else {
    // User tidak ditemukan
    echo json_encode(['success' => false, 'message' => 'User  tidak ditemukan.']);
}

$stmt->close();
$conn->close();
?>