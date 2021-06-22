<div class="main-content">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>Data Armada</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped" id="table-1">
									<div style="width:100%; text-align:right; margin-bottom:10px;">
										<a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()" class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-plus"></i></a>
									</div>

									<thead>
										<tr>
											<th class="text-center">No</th>
											<th>Nama Armada</th>
											<th>No Kendaraan</th>
											<th>Tahun Kendaraan</th>
											<th>Kapasitas Seat</th>
											<th>Status Kendaraan </th>
											<th>Username </th>
											<th>Gambar</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($t_armada->result() as $u) {
											echo "<tr>
                                  <td>" . $no . "</td>
                                  <td>" . $u->namaArmada . "</td>
                                  <td>" . $u->noKendaraan . "</td>
                                  <td>" . $u->tahunKendaraan . "</td>
                                  <td>" . $u->kapasitasSeat . "</td>
                                  <td>" . $u->statusKendaraan . "</td>
                                  <td>" . $u->username . "</td>
                                  <td><img  src=" . base_url('armada/') . $u->gambar .  " height=100; width=150;></td>
                                  <td>
                                  <a href ='#' class='on-default edit-row btn btn-primary'
                                    data-toggle='modal' data-target='#custom-width-modal' 
                                    onClick=\"SetInput('" . $u->idt_armada . "','" . $u->namaArmada . "','" . $u->noKendaraan . "',
                                    '" . $u->tahunKendaraan . "','" . $u->kapasitasSeat . "','" . $u->statusKendaraan . "','" . $u->username . "','" . $u->password . "','" . base_url('armada/').$u->gambar . "')\" class='col-sm-6 col-md-4 col-lg-3'>
                                      <i class='fas fa-pen'></i></a>
                                  <a href ='#' class='on-default default-row btn btn-danger'
                                    data-toggle='modal' data-target='#delete-modal' 
                                    onClick=\"setInput1('" . $u->idt_armada . "','" . $u->namaArmada . "','" . $u->noKendaraan . "',
                                    '" . $u->tahunKendaraan . "','" . $u->kapasitasSeat . "','" . $u->statusKendaraan . "','" . $u->username . "','" . $u->password . "','" . base_url('armada/').$u->gambar  . "')\" class='col-sm-6 col-md-4 col-lg-3'>
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
	<div class="modal fade" id="custom-width-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">DATA ARMADA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<form action="<?php echo base_url() . 'DataArmada/add'; ?>" method="post" enctype="multipart/form-data" accept="image/*">
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-1" class="control-label">Nama Armada</label>
								<input type="hidden" id="idt_armada" name="idt_armada">
								<input type="text" class="form-control" id="namaArmada" name="namaArmada" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Nomor Kendaraan</label>
								<input type="text" class="form-control" id="noKendaraan" name="noKendaraan" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Tahun Kendaraan</label>
								<input type="text" class="form-control" id="tahunKendaraan" name="tahunKendaraan" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Kapasitas Seat</label>
								<input type="text" class="form-control" id="kapasitasSeat" name="kapasitasSeat" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Status Kendaraan</label>
								<select class="form-control" id="statusKendaraan" name="statusKendaraan" data-style="btn-white" required>
									<option value="Tersewa"> Tersewa </option>
									<option value="Belum Tersewa"> Belum Tersewa </option>
									<option value="Dalam Service"> Dalam Service </option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Username</label>
								<input type="text" class="form-control" id="username" name="username" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Password</label>
								<input type="text" class="form-control" id="password" name="password" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Gambar</label><br>
								<img width="150px" height="150px" name="gambar" id="gambar">
								<input type="file" name="filegambar" id="filegambar"  onchange="readURL(this);" required>
								<input type="hidden" name="old_image" />
							</div>
						</div>
					</div>
					<td>
						<div class="model-footer">
							<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
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
				<h4 class="modal-title" id="custom-width-modalLabel">DATA ARMADA</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<form action="<?php echo base_url('DataArmada/delete'); ?>" method="post" class="form-horizontal" role="form">
			</div>
			<div class="modal-body">
				<h4>Konfirmasi</h4>
				<p>Apakah anda yakin ingin menghapus data ini ?</p>
				<div class="form-group">
					<input type="hidden" id="idt_armada1" name="idt_armada1">
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
	function SetInput(idt_armada, namaArmada, noKendaraan, tahunKendaraan, kapasitasSeat, statusKendaraan,  username, password, gambar) {
		document.getElementById('idt_armada').value = idt_armada;
		document.getElementById('namaArmada').value = namaArmada;
		document.getElementById('noKendaraan').value = noKendaraan;
		document.getElementById('tahunKendaraan').value = tahunKendaraan;
		document.getElementById('kapasitasSeat').value = kapasitasSeat;
		document.getElementById('statusKendaraan').value = statusKendaraan;
		document.getElementById('username').value = username;
		document.getElementById('password').value = password;
		document.getElementById('gambar').src = gambar;
	}

	function setInput1(idt_armada, namaArmada, noKendaraan, tahunKendaraan, kapasitasSeat, statusKendaraan,   username, password) {
		document.getElementById('idt_armada1').value = idt_armada;
		document.getElementById('namaArmada1').value = namaArmada;
		document.getElementById('noKendaraan1').value = noKendaraan;
		document.getElementById('tahunKendaraan1').value = tahunKendaraan;
		document.getElementById('kapasitasSeat1').value = kapasitasSeat;
		document.getElementById('statusKendaraan1').value = statusKendaraan;
		document.getElementById('username1').value = username;
		document.getElementById('password1').value = password;
	}

	function ResetInput(idt_armada, namaArmada, noKendaraan, tahunKendaraan, kapasitasSeat, statusKendaraan,   username, password) {
		document.getElementById('idt_armada').value = "";
		document.getElementById('namaArmada').value = "";
		document.getElementById('noKendaraan').value = "";
		document.getElementById('tahunKendaraan').value = "";
		document.getElementById('kapasitasSeat').value = "";
		document.getElementById('statusKendaraan').value = "";
		document.getElementById('username').value = "";
		document.getElementById('password').value = "";
	}

	function readURL(input) { //tambahan
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
				$('#gambar').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
