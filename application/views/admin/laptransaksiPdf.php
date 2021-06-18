<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
        }

        th {
            height: 30px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 3px;
        }

        thead {
            background: lightgray;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
            <center><b><font size="5" face="arial">Duta Ryana Tour and Travel</font><b></center>
            <center><b><font size="4" face="Courier New">LAPORAN TRANSAKSI</font></b></center>
            <center><?php
            $tanggalAwal = date('d-m-y', strtotime($_POST['start']));
            $tanggalAkhir = date('d-m-y', strtotime($_POST['end']));
            echo "Periode ".$tanggalAwal." sampai ".$tanggalAkhir."</br>";
            ?></center>     
            <center>Jln. Raya Surabaya-Madiun, Sumberbening - Balerejo, Madiun</center>
            <hr><width="100" height="75"></hr>       
    <table style="width=100%;" border="1" align="center">
        <tr align="center">
                    <td> No </td>
                    <td> Tanggal Transaksi </td>
                    <td> Nama Penyewa </td>
                    <td> Lama Sewa </td>
                    <td> Total Harga </td>
                    <td> Status Pembayaran </td>
                    <td> Keterangan Sewa </td>
                    <td> Alamat Penyewa </td>
                    <td> Telepon Penyewa </td>
                    <td> Nama Armada </td>
                    <td> Nomor Kendaraan </td>
        </tr>
        <?php 
                    $no = 0;
                    foreach($query->result()  as $u){
                        $no++;
                        echo "<tr>";
                            echo "<td><center>".$no."</center></td>";
                            echo"<td>".$u->tanggalTransaksi."</td>";
                            echo"<td>".$u->namaPenyewa."</td>";
                            echo"<td>".$u->lamaSewa."</td>";
                            echo"<td>".$u->totalHarga."</td>";
                            echo"<td>".$u->statusPembayaran."</td>";
                            echo"<td>".$u->keteranganSewa."</td>";
                            echo"<td>".$u->alamatPenyewa."</td>";
                            echo"<td>".$u->telponPenyewa."</td>";
                            echo"<td>".$u->namaArmada."</td>";
                            echo"<td>".$u->noKendaraan."</td>";
                            echo"</tr>";
                    } 
                ?>
    </table>

</body>