<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Service</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <form action="<?php echo base_url('DompdfService');?>" target="_blank" method="post" class="form-horizontal" role="form">
                      <table class="table table-striped" id="table-1">
                        <div class="float-right">
                            <button type="submit" class="btn btn-success btn-sm" >Cetak Laporan</button>
                        </div>
                        <thead>
                          <tr>
                          <th class="text-center">No</th>
                          <th>Nama Armada</th>
                            <th>No Kendaraan</th>
                            <th>Terakhir Service</th>
                            <th>Biaya Sevice</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($t_service as $u) {
                          echo"<tr>
                                  <td>".$no."</td>
                                  <td>".$u->namaArmada."</td>
                                      <td>".$u->noKendaraan."</td>
                                      <td>".$u->tanggalService."</td>
                                      <td>".$u->biayaService."</td>
                                      <td>".$u->keterangan."</td>
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