<?php
include("../koneksi/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $tiket = $_POST['tiket'] ?? '';
    $payment_method = $_POST['payment_method'] ?? '';
    $tiket_type = $_POST['tiket_type'] ?? '';
    $destinasi_name = $_POST['destinasi_name'] ?? '';
    $total_cost = $_POST['total_cost'] ?? '';

    $total_cost = str_replace(['Rp ', '.', ','], ['', '', '.'], $total_cost);
    $total_cost = (float) $total_cost;

    $stmt = $conn->prepare("INSERT INTO tikets (name, email, tanggal, tiket, payment_method, tiket_type, destinasi_name, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssd", $name, $email, $tanggal, $tiket, $payment_method, $tiket_type, $destinasi_name, $total_cost);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Form tidak disubmit.";
}
