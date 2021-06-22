<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Transaksi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <form action="<?php echo base_url('DompdfTransaksi');?>" target="_blank" method="post" class="form-horizontal" role="form">
                      <table class="table table-striped" id="table-1">
                        <div class="float-right">
                            <button type="submit" class="btn btn-success btn-sm" >Cetak Laporan</button>
                        </div>
                        <thead>
                          <tr>
                          <th class="text-center">No</th>
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
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($t_transaksi as $u) {
                          echo"<tr>
                                  <td>".$no."</td>
                                  <td>".$u->tanggalTransaksi."</td>
                                  <td>".$u->namaPenyewa."</td>
                                  <td>".$u->selesaiSewa."</td>
                                  <td>".$u->totalHarga."</td>
                                  <td>".$u->statusPembayaran."</td>
                                  <td>".$u->keteranganSewa."</td>
                                  <td>".$u->alamatPenyewa."</td>
                                  <td>".$u->noTelfon."</td>
                                  <td>".$u->namaArmada."</td>
                                  <td>".$u->namaPegawai."</td>
                                  <td>".$u->perjalanan."</td>
                                </tr>";
                            $no++;
                          }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
<!-- end row -->