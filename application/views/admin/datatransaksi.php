<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Transaksi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <div style="width:100%; text-align:right; margin-bottom:10px;">
                                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()"><i class="fa fa-plus"></i></a>
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
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($t_transaksi as $u) {
                          echo"<tr>
                                  <td>".$no."</td>
                                  <td>".shortdate_indo($u->tanggalTransaksi)."</td>
                                  <td>".$u->namaPenyewa."</td>
                                  <td>".shortdate_indo($u->selesaiSewa)."</td>
                                  <td>".$u->totalHarga."</td>
                                  <td>".$u->statusPembayaran."</td>
                                  <td>".$u->keteranganSewa."</td>
                                  <td>".$u->alamatPenyewa."</td>
                                  <td>".$u->noTelfon."</td>
                                  <td>".$u->namaArmada."</td>
                                  <td>".$u->namaPegawai."</td>
                                  <td>".$u->perjalanan."</td>
                                  <td>
                                  <a href ='#' class='on-default edit-row btn btn-primary'
                                  data-toggle='modal' data-target='#custom-width-modal' 
                                  onClick=\"SetInput('".$u->idt_transaksi."','".$u->tanggalTransaksi."',
                                    '".$u->selesaiSewa."','".$u->totalHarga."','".$u->statusPembayaran."','".$u->keteranganSewa."','".$u->perjalanan."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                    <i class='fas fa-pen'></i></a>
                                <a href ='#' class='on-default default-row btn btn-danger'
                                  data-toggle='modal' data-target='#delete-modal' 
                                  onClick=\"setInput1('".$u->idt_transaksi."','".$u->tanggalTransaksi."',
                                    '".$u->selesaiSewa."','".$u->totalHarga."','".$u->statusPembayaran."','".$u->keteranganSewa."','".$u->perjalanan."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                    <i class='fas fa-trash'></i></a>
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
        <div class="modal fade" id="custom-width-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DATA TRANSAKSI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <form action="<?php echo base_url(). 'DataTransaksi/add';?>" method="post" enctype="multipart/form-data">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Tanggal Transaksi</label>
                                    <input type="hidden" id="idt_transaksi" name="idt_transaksi">
                                    <input type="date" class="form-control" value="<?php echo date('d-m-Y'); ?>" id="tanggalTransaksi" name="tanggalTransaksi" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nama Penyewa</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_penyewa" name="idt_penyewa"  required >
                                        <option value=""></option>
                                            <?php
                                            $t_penyewa = $this->M_penyewa->tampil_data();
                                             foreach ($t_penyewa->result() as $u) { 
                                                echo "<option value='".$u->idt_penyewa."'>".$u->namaPenyewa."</option>";
                                             }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Selesai Sewa</label>
                                    <input type="date" class="form-control" value="<?php echo date('d-m-Y'); ?>" id="selesaiSewa" name="selesaiSewa" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Total Harga</label>
                                    <input type="text" class="form-control" id="totalHarga" name="totalHarga" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Status pembayaran</label>
                                    <select type="text" class="form-control" id="statusPembayaran" name="statusPembayaran" data-style="btn-white" required >
                                        <option value="Lunas"> Lunas </option>
                                        <option value="Belum Lunas"> Belum Lunas </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Keterangan Sewa</label>
                                    <select type="text" class="form-control" id="keteranganSewa" name="keteranganSewa" data-style="btn-white" required>
                                        <option value="Driver (Sopir)"> Driver (Sopir) </option>
                                        <option value="Rental"> Rental </option>
                                        <option value="Antar Jemput Airport"> Antar Jemput Airport </option>
                                        <option value="Carteran"> Carteran </option>
                                        <option value="Pariwisata"> Pariwisata </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Alamat Penyewa</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_penyewa" name="idt_penyewa"  required >
                                        <option value=""></option>
                                            <?php
                                            $t_penyewa = $this->M_penyewa->tampil_data();
                                             foreach ($t_penyewa->result() as $u) { 
                                                echo "<option value='".$u->idt_penyewa."'>".$u->alamatPenyewa."</option>";
                                             }
                                        ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Telpon Penyewa</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_penyewa" name="idt_penyewa"  required >
                                        <option value=""></option>
                                            <?php
                                            $t_penyewa = $this->M_penyewa->tampil_data();
                                             foreach ($t_penyewa->result() as $u) { 
                                                echo "<option value='".$u->idt_penyewa."'>".$u->noTelfon."</option>";
                                             }
                                        ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nama Armada</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_armada" name="idt_armada"  required >
                                        <option value=""></option>
                                            <?php
                                            $t_armada = $this->M_dataarmada->tampil_data();
                                             foreach ($t_armada->result() as $u) { 
                                                echo "<option value='".$u->idt_armada."'>".$u->namaArmada."</option>";
                                             }
                                        ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nama sopir</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_pegawai" name="idt_pegawai" required>
                                            <option value=""></option>
                                                <?php
                                                $t_pegawai = $this->M_pegawai->tampil_data();
                                                foreach ($t_pegawai->result() as $u) { 
                                                    echo "<option value='".$u->idt_pegawai."'>".$u->namaPegawai."</option>";
                                                }
                                            ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Rute Perjalanan</label>
                                    <input type="text" class="form-control" id="perjalanan" name="perjalanan" required >
                                </div>
                            </div>
                        </div>
                          <td>
                            <div class="model-footer">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                <button type="submit" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Batal</button>
                            </div>
                          </td>
                        </td>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog" style="width:55%;">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title" id="custom-width-modalLabel">DATA TRANSAKSI</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                              <form action="<?php echo base_url('DataTransaksi/delete'); ?>" method="post" class="form-horizontal" role="form">
                          </div>
                          <div class="modal-body">
                              <h4>Konfirmasi</h4>
                              <p>Apakah anda yakin ingin menghapus data ini ?</p>
                              <div class="form-group">
                                   <input type="hidden" id="idt_transaksi1" name="idt_transaksi1">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                              <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>

          <script type="text/javascript">
                function SetInput(idt_transaksi, tanggalTransaksi, selesaiSewa, totalHarga, statusPembayaran, keteranganSewa,) {
                    document.getElementById('idt_transaksi').value = idt_transaksi;
                    document.getElementById('tanggalTransaksi').value = tanggalTransaksi;
                    document.getElementById('selesaiSewa').value = selesaiSewa;
                    document.getElementById('totalHarga').value = totalHarga;
                    document.getElementById('statusPembayaran').value = statusPembayaran;
                    document.getElementById('keteranganSewa').value = keteranganSewa;
                }
                function setInput1(idt_transaksi, tanggalTransaksi, selesaiSewa, totalHarga, statusPembayaran, keteranganSewa) {
                    document.getElementById('idt_transaksi1').value = idt_transaksi;
                    document.getElementById('tanggalTransaksi1').value = tanggalTransaksi;
                    document.getElementById('selesaiSewa1').value = selesaiSewa;
                    document.getElementById('totalHarga1').value = totalHarga;
                    document.getElementById('statusPembayaran1').value = statusPembayaran;
                    document.getElementById('keteranganSewa1').value = keteranganSewa;
                }
                function ResetInput(idt_transaksi, tanggalTransaksi, selesaiSewa, totalHarga, statusPembayaran, keteranganSewa) {
                    document.getElementById('idt_transaksi').value = "";
                    document.getElementById('tanggalTransaksi').value = "";
                    document.getElementById('selesaiSewa').value = "";
                    document.getElementById('totalHarga').value = "";
                    document.getElementById('statusPembayaran').value = "";
                    document.getElementById('keteranganSewa').value = "";
                }
             </script>