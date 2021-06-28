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
            <center><b><font size="4" face="Courier New">LAPORAN SERVICE</font></b></center>   
            <center><b> Jln. Raya Surabaya-Madiun, Sumberbening - Balerejo, Madiun <b></center>
            <hr><width="100" height="75"></hr>       
    <table style="width=100%;" border="1" align="center">
        <tr align="center">
                    <td> No </td>
                    <td> Nama Armada </td>
                    <td> Nomor Kendaraan </td>
                    <td> Tanggal Service </td>
                    <td> Biaya Service </td>
                    <td> Keterangan </td>
        </tr>
        <?php 
                    $no = 0;
                    foreach($query  as $u){
                        $no++;
                        echo "<tr>";
                            echo "<td><center>".$no."</center></td>";
                            echo"<td>".$u->namaArmada."</td>";
                            echo"<td>".$u->noKendaraan."</td>";
                            echo"<td>".shortdate_indo($u->tanggalService)."</td>";
                            echo"<td>".$u->biayaService."</td>";
                            echo"<td>".$u->keterangan."</td>";
                            echo"</tr>";
                    } 
                ?>
    </table>

    </body>