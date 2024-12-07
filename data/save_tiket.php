<?php
include("../koneksi/koneksi.php"); // Pastikan koneksi ke database sudah benar

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari request POST
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $tiket = $_POST['tiket'] ?? '';
    $payment_method = $_POST['payment_method'] ?? '';
    $tiket_type = $_POST['tiket_type'] ?? '';
    $destinasi_name = $_POST['destinasi_name'] ?? '';
    $total_cost = $_POST['total_cost'] ?? '';

    // Menghapus format dari total_cost dan mengubahnya menjadi float
    $total_cost = str_replace(['Rp ', '.', ','], ['', '', '.'], $total_cost);
    $total_cost = (float) $total_cost; 

    // Siapkan statement untuk memasukkan data ke database
    $stmt = $conn->prepare("INSERT INTO tikets (name, email, tanggal, tiket, payment_method, tiket_type, destinasi_name, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssd", $name, $email, $tanggal, $tiket, $payment_method, $tiket_type, $destinasi_name, $total_cost);

    // Eksekusi statement dan cek hasilnya
    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "Form tidak disubmit.";
}
?>