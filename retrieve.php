<?php
require("koneksi.php");
$perintah = "SELECT * FROM t_track";
$eksekusi = mysqli_query($koneksi, $perintah);
$cek = mysqli_affected_rows($koneksi);

if($cek > 0){
  $response["kode"] = 1;
  $response["pesan"] = "Data Tersedia";
  $response["data"] = array();

  while($ambil = mysqli_fetch_object($eksekusi)){
      $F["id"] = $ambil->idt_track;
      $F["name"] = $ambil->name;
      $F["username"] = $ambil->username;
      $F["password"] = $ambil->password;
      $F["latitude"] = $ambil->latitude;
      $F["longitude"] = $ambil->longitude;

      array_push($response["data"], $F);
  }
} else{
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($koneksi);