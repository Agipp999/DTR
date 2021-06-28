<?php
require("koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $waktu = $_POST["waktu"];
    $idt_track = $_POST["idt_track"];
    $idt_armada = $_POST["idt_armada"];
    $idt_transaksi = $_POST["idt_transaksi"];

    //$perintah = "INSERT INTO t_user (latitude, longitude) VALUES('$latitude','$longitude')";
    $perintah = "INSERT INTO t_track SET latitude = '$latitude', longitude = '$longitude', waktu = '$waktu', idt_armada = '$idt_armada', idt_transaksi = '$idt_transaksi' WHERE idt_track = '$idt_armada'";
    $eksekusi = mysqli_query($koneksi, $perintah);
    $cek      = mysqli_affected_rows($koneksi);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Simpan Data Berhasil";
    } else {
        $response["kode"] = 0;
        $response["pesan"] = "Gagal Menyimpan Data";
    }

} else {
    $response["kode"] = 0;
    $response["pesan"] ="Tidak Ada Post Data";
}

echo json_encode($response);
