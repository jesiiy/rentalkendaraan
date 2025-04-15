<?php
// save_rental.php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "rental_db");

$data = json_decode(file_get_contents("php://input"), true);

$id_kendaraan = $data["id_kendaraan"];
$total_harga = $data["total_harga"];
$id_pelanggan = $data["id_pelanggan"];
$tanggal_peminjaman = $data["tanggal_peminjaman"];

$sql = "INSERT INTO sewa (id_pelanggan, id_kendaraan, tanggal_peminjaman, total_harga) 
        VALUES ('$id_pelanggan', '$id_kendaraan', '$tanggal_peminjaman', '$total_harga')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}

$conn->close();
?>
