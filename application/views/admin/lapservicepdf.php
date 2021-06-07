<pre>
    <table width="100%">
    <tr align="center">
        <td align="center">
            <hr><width="100" height="75"></hr>
            <center><b><font size="5" face="arial">Duta Ryana Tour and Travel</font><b></center>
            <center><b><font size="4" face="Courier New">LAPORAN SERVICE</font></b></center>
            <center><b><?php
            $tanggalAwal = date('d-m-y', strtotime($_POST['start']));
            $tanggalAkhir = date('d-m-y', strtotime($_POST['end']));
            echo "Periode ".$tanggalAwal." sampai ".$tanggalAkhir."</br>";
            ?><b></center>     
            <center><b> Jln. Raya Surabaya-Madiun, Sumberbening - Balerejo, Madiun <b></center>
            <hr><width="100" height="75"></hr>       
        </b></p><br>
        </td>
    </tr>
    </table>
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
                    foreach($query->result()  as $u){
                        $no++;
                        echo "<tr>";
                            echo "<td><center>".$no."</center></td>";
                            echo"<td>".$u->namaArmada."</td>";
                            echo"<td>".$u->noKendaraan."</td>";
                            echo"<td>".$u->tanggalService."</td>";
                            echo"<td>".$u->biayaService."</td>";
                            echo"<td>".$u->keterangan."</td>";
                            echo"</tr>";
                    } 
                ?>
    </table>
    <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Madiun, <?php echo date('d-m-y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/></td>
    </tr>    
    <tr>
        
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
</pre>