<?php
include("../koneksi/koneksi.php");

$name = $_POST['name'];
$email = $_POST['email'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$guests = $_POST['guests'];
$payment_method = $_POST['payment_method'];
$room_type = $_POST['room_type'];
$hotel_name = $_POST['hotel_name'];

$total_cost = str_replace(['Rp ', '.', ','], ['', '', '.'], $_POST['total_cost']);
$total_cost = (float) $total_cost; 

$stmt = $conn->prepare("INSERT INTO bookings (name, email, check_in, check_out, guests, payment_method, room_type, hotel_name, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssd", $name, $email, $check_in, $check_out, $guests, $payment_method, $room_type, $hotel_name, $total_cost);

if ($stmt->execute()) {
    echo "Data berhasil disimpan!";
} else {
    echo "Terjadi kesalahan: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>