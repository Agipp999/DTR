<?php
require("koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $user_id = $_POST["user_id"];

    //$perintah = "INSERT INTO t_user (latitude, longitude) VALUES('$latitude','$longitude')";
    $perintah = "UPDATE t_user SET latitude = '$latitude', longitude = '$longitude' WHERE idt_user = '$user_id'";
    $eksekusi = mysqli_query($koneksi, $perintah);
    $cek      = mysqli_affected_rows($koneksi);

    if($eksekusi){
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
mysqli_close($koneksi);