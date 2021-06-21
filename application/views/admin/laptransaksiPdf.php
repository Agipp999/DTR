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
            <center>Jln. Raya Surabaya-Madiun, Sumberbening - Balerejo, Madiun</center>
            <hr><width="100" height="75"></hr>       
    <table style="width=100%;" border="1" align="center">
        <tr align="center">
                            <td> No </td>
                            <th>Mulai Sewa</th>
                            <th>Nama Penyewa</th>
                            <th>Selesai Sewa</th>
                            <th>Total Harga</th>
                            <th>Status Pembayaran</th>
                            <th>Keterangan Sewa</th>
                            <th>Alamat Penyewa</th>
                            <th>Telepon Penyewa</th>
                            <th>Nama Armada</th>
                            <th>Nama Sopir</th>
                            <th>Rute Perjalanan</th>
                          </tr>
        </tr>
        <?php 
                    $no = 1;
                    foreach($query->result()  as $u){
                        $no++;
                        echo "<tr>";
                            echo "<td><center>".$no."</center></td>";
                            echo "<td><center>".$u->tanggalTransaksi."</center></td>";
                            echo "<td><center>".$u->namaPenyewa."</center></td>";
                            echo "<td><center>".$u->selesaiSewa."</center></td>";
                            echo "<td><center>".$u->totalHarga."</center></td>";
                            echo "<td><center>".$u->statusPembayaran."</center></td>";
                            echo "<td><center>".$u->keteranganSewa."</center></td>";
                            echo "<td><center>".$u->alamatPenyewa."</center></td>";
                            echo "<td><center>".$u->noTelfon."</center></td>";
                            echo "<td><center>".$u->namaArmada."</center></td>";
                            echo "<td><center>".$u->namaPegawai."</center></td>";
                            echo "<td><center>".$u->perjalanan."</center></td>";
                            echo"</tr>";
                    } 
                ?>
    </table>

</body>