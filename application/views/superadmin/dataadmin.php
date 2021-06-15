<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Admin</h4>
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
                            <th>Nama Admin</th>
                            <th>Nomer Telfon</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $no = 1;
                          foreach ($t_admin->result() as $u) {
                          echo"<tr>
                                  <td>".$no."</td>
                                  <td>".$u->namaAdmin."</td>
                                  <td>".$u->noTelfon."</td>
                                  <td>".$u->username."</td>
                                  <td>".$u->password_2."</td>
                                  <td>".$u->level."</td>
                                  <td>
                                  <a href ='#' class='on-default edit-row btn btn-primary'
                                    data-toggle='modal' data-target='#custom-width-modal' 
                                    onClick=\"SetInput('".$u->idt_admin."','".$u->namaAdmin."','".$u->noTelfon."',
                                  '".$u->username."','".$u->password_2."','".$u->level."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                    <i class='fas fa-pen'></i></a>
                                    <a href ='#' class='on-default default-row btn btn-danger'
                                    data-toggle='modal' data-target='#delete-modal' 
                                    onClick=\"setInput1('".$u->idt_admin."','".$u->namaAdmin."','".$u->noTelfon."',
                                  '".$u->username."','".$u->password_2."','".$u->level."')\" class='col-sm-6 col-md-4 col-lg-3'>
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
                <h5 class="modal-title" id="exampleModalLabel">DATA ADMIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <form action="<?php echo base_url(). 'AdminAdmin/add';?>" method="post" enctype="multipart/form-data">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nama Admin</label>
                                    <input type="hidden" id="idt_admin" name="idt_admin">
                                    <input type="text" class="form-control" id="namaAdmin" name="namaAdmin" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="noTelfon" name="noTelfon" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Password</label>
                                    <input type="text" class="form-control" id="password_2" name="password_2" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Level</label>
                                    <select type="text" class="form-control" id="level" name="level" data-style="btn-white" required >
                                        <option value="Admin">Admin</option>
                                        <option value="SuperAdmin">SuperAdmin</option>
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
                              <h4 class="modal-title" id="custom-width-modalLabel">DATA ADMIN</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                              <form action="<?php echo base_url('AdminAdmin/delete'); ?>" method="post" class="form-horizontal" role="form">
                          </div>
                          <div class="modal-body">
                              <h4>Konfirmasi</h4>
                              <p>Apakah anda yakin ingin menghapus data ini ?</p>
                              <div class="form-group">
                                   <input type="hidden" id="idt_admin1" name="idt_admin1">
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
                function SetInput(idt_admin, namaAdmin, noTelfon, username, password_2, level) {
                    document.getElementById('idt_admin').value = idt_admin;
                    document.getElementById('namaAdmin').value = namaAdmin;
                    document.getElementById('noTelfon').value = noTelfon;
                    document.getElementById('username').value = username;
                    document.getElementById('password_2').value = password_2;
                    document.getElementById('level').value = level;
                }
                function setInput1(idt_admin, namaAdmin, noTelfon, username, password_2, level) {
                    document.getElementById('idt_admin1').value = idt_admin;
                    document.getElementById('namaAdmin1').value = namaAdmin;
                    document.getElementById('noTelfon1').value = noTelfon;
                    document.getElementById('username1').value = username;
                    document.getElementById('password_21').value = password_2;
                    document.getElementById('level1').value = level;
                }
                function ResetInput(idt_admin, namaAdmin, noTelfon, username, password_2, level) {
                    document.getElementById('idt_admin').value = "";
                    document.getElementById('namaAdmin').value = "";
                    document.getElementById('noTelfon').value = "";
                    document.getElementById('username').value = "";
                    document.getElementById('password_2').value = "";
                    document.getElementById('level').value = "";
                }
              </script>