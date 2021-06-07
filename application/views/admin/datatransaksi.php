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
                            <th>Tanggal Transaksi</th>
                            <th>Nama Penyewa</th>
                            <th>Lama Penyewaan</th>
                            <th>Total Harga</th>
                            <th>Status Pembayaran</th>
                            <th>Keterangan Sewa</th>
                            <th>Alamat Penyewa</th>
                            <th>Telepon Penyewa</th>
                            <th>Nama Armada</th>
                            <th>Nomor Kendaraan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($t_transaksi->result() as $u) {
                          echo"<tr>
                                  <td>".$no."</td>
                                  <td>".$u->tanggalTransaksi."</td>
                                  <td>".$u->namaPenyewa."</td>
                                  <td>".$u->lamaSewa."</td>
                                  <td>".$u->totalHarga."</td>
                                  <td>".$u->statusPembayaran."</td>
                                  <td>".$u->keteranganSewa."</td>
                                  <td>".$u->alamatPenyewa."</td>
                                  <td>".$u->telponPenyewa."</td>
                                  <td>".$u->namaArmada."</td>
                                  <td>".$u->noKendaraan."</td>
                                  <td>
                                  <a href ='#' class='on-default edit-row btn btn-primary'
                                    data-toggle='modal' data-target='#custom-width-modal' 
                                    onClick=\"SetInput('".$u->idt_transaksi."','".$u->tanggalTransaksi."','".$u->namaPenyewa."',
                                    '".$u->lamaSewa."','".$u->totalHarga."','".$u->statusPembayaran."','".$u->keteranganSewa."','".$u->alamatPenyewa."',
                                    '".$u->telponPenyewa."','".$u->idt_armada."','".$u->idt_armada."')\" class='col-sm-6 col-md-4 col-lg-3'><i class='fas fa-pen'></i></a>
                                  <a href ='#' class='on-default default-row btn btn-danger'
                                    data-toggle='modal' data-target='#delete-modal' 
                                    onClick=\"setInput1('".$u->idt_transaksi."','".$u->tanggalTransaksi."','".$u->namaPenyewa."',
                                    '".$u->lamaSewa."','".$u->totalHarga."','".$u->statusPembayaran."','".$u->keteranganSewa."','".$u->alamatPenyewa."',
                                    '".$u->telponPenyewa."','".$u->idt_armada."','".$u->idt_armada."')\"class='col-sm-6 col-md-4 col-lg-3'><i class='fas fa-trash'></i></a>
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
                                    <input type="text" class="form-control" id="namaPenyewa" name="namaPenyewa" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Lama Sewa</label>
                                    <input type="text" class="form-control" id="lamaSewa" name="lamaSewa" required >
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
                                    <input type="text" class="form-control" id="alamatPenyewa" name="alamatPenyewa" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">telpon Penyewa</label>
                                    <input type="text" class="form-control" id="telponPenyewa" name="telponPenyewa" required >
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
                                    <label for="field-3" class="control-label">Nomor Kendaraan</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_armada" name="idt_armada"  required >
                                        <option value=""></option>
                                            <?php
                                            $t_armada = $this->M_dataarmada->tampil_data();
                                             foreach ($t_armada->result() as $u) { 
                                                echo "<option value='".$u->idt_armada."'>".$u->noKendaraan."</option>";
                                             }
                                        ?>
                                        </select>
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
                function SetInput(idt_transaksi, idt_armada, tanggalTransaksi, namaPenyewa, lamaSewa, totalHarga, statusPembayaran, keteranganSewa, alamatPenyewa, telponPenyewa,  noKendaraan) {
                    document.getElementById('idt_transaksi').value = idt_transaksi;
                    document.getElementById('tanggalTransaksi').value = tanggalTransaksi;
                    document.getElementById('namaPenyewa').value = namaPenyewa;
                    document.getElementById('lamaSewa').value = lamaSewa;
                    document.getElementById('totalHarga').value = totalHarga;
                    document.getElementById('statusPembayaran').value = statusPembayaran;
                    document.getElementById('keteranganSewa').value = keteranganSewa;
                    document.getElementById('alamatPenyewa').value = alamatPenyewa;
                    document.getElementById('telponPenyewa').value = telponPenyewa;
                    document.getElementById('namaArmada').value = namaArmada;
                    document.getElementById('noKendaraan').value = noKendaraan;
                }
                function setInput1(idt_transaksi,idt_armada, tanggalTransaksi, namaPenyewa,  lamaSewa, totalHarga, statusPembayaran, keteranganSewa, alamatPenyewa, telponPenyewa, namaArmada, noKendaraan) {
                    document.getElementById('idt_transaksi1').value = idt_transaksi;
                    document.getElementById('tanggalTransaksi1').value = tanggalTransaksi;
                    document.getElementById('namaPenyewa1').value = namaPenyewa;
                    document.getElementById('lamaSewa1').value = lamaSewa;
                    document.getElementById('totalHarga1').value = totalHarga;
                    document.getElementById('statusPembayaran1').value = statusPembayaran;
                    document.getElementById('keteranganSewa1').value = keteranganSewa;
                    document.getElementById('alamatPenyewa1').value = alamatPenyewa;
                    document.getElementById('telponPenyewa1').value = telponPenyewa;
                    document.getElementById('namaArmada1').value = namaArmada;
                    document.getElementById('noKendaraan1').value = noKendaraan;
                }
                function ResetInput(idt_transaksi,idt_armada, tanggalTransaksi, namaPenyewa,  lamaSewa, totalHarga, statusPembayaran, keteranganSewa, alamatPenyewa, telponPenyewa, namaArmada, noKendaraan) {
                    document.getElementById('idt_transaksi').value = "";
                    document.getElementById('tanggalTransaksi').value = "";
                    document.getElementById('namaPenyewa').value = "";
                    document.getElementById('lamaSewa').value = "";
                    document.getElementById('totalHarga').value = "";
                    document.getElementById('statusPembayaran').value = "";
                    document.getElementById('keteranganSewa').value = "";
                    document.getElementById('alamatPenyewa').value = "";
                    document.getElementById('telponPenyewa').value = "";
                    document.getElementById('namaArmada').value = "";
                    document.getElementById('noKendaraan').value = "";
                }
             </script>