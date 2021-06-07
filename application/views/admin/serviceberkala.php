<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Service Berkala</h4>
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
                            <th>Nama Armada</th>
                            <th>No Kendaraan</th>
                            <th>Terakhir Service</th>
                            <th>Biaya Sevice</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                         <tbody>
                          <?php
                              $no = 1;
                              foreach ($t_service->result() as $u) {
                              echo"<tr>
                                      <td>".$no."</td>
                                      <td>".$u->namaArmada."</td>
                                      <td>".$u->noKendaraan."</td>
                                      <td>".$u->tanggalService."</td>
                                      <td>".$u->biayaService."</td>
                                      <td>".$u->keterangan."</td>
                                      <td>
                                      <a href ='#' class='on-default edit-row btn btn-primary'
                                    data-toggle='modal' data-target='#custom-width-modal' 
                                    onClick=\"SetInput('".$u->idt_service."','".$u->idt_armada."','".$u->idt_armada."',
                                        '".$u->tanggalService."','".$u->biayaService."','".$u->keterangan."')\" class='col-sm-6 col-md-4 col-lg-3'><i class='fas fa-pen'></i></a>
                                        <a href ='#' class='on-default default-row btn btn-danger'
                                        data-toggle='modal' data-target='#delete-modal' 
                                        onClick=\"setInput1('".$u->idt_service."','".$u->idt_armada."','".$u->idt_armada."',
                                        '".$u->tanggalService."','".$u->biayaService."','".$u->keterangan."')\" class='col-sm-6 col-md-4 col-lg-3'>
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
                <h5 class="modal-title" id="exampleModalLabel">Service Berkala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <form action="<?php echo base_url(). 'ServiceBerkala/add';?>" method="post" enctype="multipart/form-data">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nama Armada</label>
                                    <input type="hidden" id="idt_service" name="idt_service">
								                    <select class="form-control" data-live-search="true" data-style="btn-white" id="idt_armada" name="idt_armada" required>
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
                                    <label for="field-3" class="control-label">Nomer Kendaraan</label>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Terakhir Service</label>
                                    <input type="date" class="form-control" value="<?php echo date('d-m-y'); ?>" id="tanggalService" name="tanggalService" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Biaya Service</label>
                                    <input type="text" class="form-control" id="biayaService" name="biayaService" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" required >
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
                              <h4 class="modal-title" id="custom-width-modalLabel">SERVICE BERKALA</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                              <form action="<?php echo base_url('ServiceBerkala/delete'); ?>" method="post" class="form-horizontal" role="form">
                          </div>
                          <div class="modal-body">
                              <h4>Konfirmasi</h4>
                              <p>Apakah anda yakin ingin menghapus data ini ?</p>
                              <div class="form-group">
                                   <input type="hidden" id="idt_service1" name="idt_service1">
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
                function SetInput(idt_service,idt_armada, namaArmada, noKendaraan, tanggalService, biayaService, keterangan) {
                    document.getElementById('idt_service').value = idt_service;
                    document.getElementById('namaArmada').value = namaArmada;
                    document.getElementById('noKendaraan').value = noKendaraan;
                    document.getElementById('tanggalService').value = tanggalService;
                    document.getElementById('biayaService').value = biayaService;
                    document.getElementById('keterangan').value = keterangan;
                }
                function setInput1(idt_service,idt_armada, namaArmada, noKendaraan, tanggalService, biayaService, keterangan) {
                    document.getElementById('idt_service1').value = idt_service;
                    document.getElementById('namaArmada1').value = namaArmada;
                    document.getElementById('noKendaraan1').value = noKendaraan;
                    document.getElementById('tanggalService1').value = tanggalService;
                    document.getElementById('biayaService1').value = biayaService;
                    document.getElementById('keterangan1').value = keterangan;
                }
                function ResetInput(idt_service,idt_armada, namaArmada, noKendaraan, tanggalService, biayaService, keterangan) {
                    document.getElementById('idt_service').value = '';
                    document.getElementById('namaArmada').value = '';
                    document.getElementById('noKendaraan').value = '';
                    document.getElementById('tanggalService').value = '';
                    document.getElementById('biayaService').value = '';
                    document.getElementById('keterangan').value = '';
                }
             </script>