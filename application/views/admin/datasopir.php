<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Sopir</h4>
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
                            <th>Nama Sopir</th>
                            <th>Alamat</th>
                            <th>Nomer Telfon</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($t_sopir->result() as $u) {
                          echo"<tr>
                                  <td>".$no."</td>
                                  <td>".$u->namaPegawai."</td>
                                  <td>".$u->alamatPegawai."</td>
                                  <td>".$u->noTelfon."</td>
                                  <td>
                                  <a href ='#' class='on-default edit-row btn btn-primary'
                                    data-toggle='modal' data-target='#custom-width-modal' 
                                    onClick=\"SetInput('".$u->idt_sopir."')\" class='col-sm-6 col-md-4 col-lg-3'><i class='fas fa-pen'></i></a>
                                  <a href ='#' class='on-default default-row btn btn-danger'
                                    data-toggle='modal' data-target='#delete-modal' 
                                    onClick=\"setInput1('".$u->idt_sopir."')\"class='col-sm-6 col-md-4 col-lg-3'><i class='fas fa-trash'></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">DATA SOPIR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <form action="<?php echo base_url(). 'DataSopir/add';?>" method="post" enctype="multipart/form-data">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nama sopir</label>
                                    <input type="hidden" id="idt_sopir" name="idt_sopir">
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
                                    <label for="field-3" class="control-label">Alamat</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_pegawai" name="idt_pegawai" required>
                                            <option value=""></option>
                                                <?php
                                                $t_pegawai = $this->M_pegawai->tampil_data();
                                                foreach ($t_pegawai->result() as $u) { 
                                                    echo "<option value='".$u->idt_pegawai."'>".$u->alamatPegawai."</option>";
                                                }
                                            ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nomor Telepon</label>
                                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_pegawai" name="idt_pegawai" required>
                                            <option value=""></option>
                                                <?php
                                                $t_pegawai = $this->M_pegawai->tampil_data();
                                                foreach ($t_pegawai->result() as $u) { 
                                                    echo "<option value='".$u->idt_pegawai."'>".$u->noTelfon."</option>";
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
                              <h4 class="modal-title" id="custom-width-modalLabel">DATA SOPIR</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                              <form action="<?php echo base_url('DataSopir/delete'); ?>" method="post" class="form-horizontal" role="form">
                          </div>
                          <div class="modal-body">
                              <h4>Konfirmasi</h4>
                              <p>Apakah anda yakin ingin menghapus data ini ?</p>
                              <div class="form-group">
                                   <input type="hidden" id="idt_sopir1" name="idt_sopir1">
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
                function SetInput(idt_sopir) {
                    document.getElementById('idt_sopir').value = idt_sopir;
                }
                function setInput1(idt_sopir) {
                    document.getElementById('idt_sopir1').value = idt_sopir;
                }
                function ResetInput(idt_sopir) {
                    document.getElementById('idt_sopir').value = "";
                }
              </script>