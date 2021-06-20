<div class="main-content">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>Data Penyewa</h4>
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
											<th>Nama Penyewa</th>
											<th>Alamat Penyewa</th>
											<th>Nomor Telepon</th>
											<th>Jenis Kelamin</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($t_penyewa->result() as $u) {
											echo "<tr>
                                                    <td>" . $no . "</td>
                                                    <td>" . $u->namaPenyewa . "</td>
                                                    <td>" . $u->alamatPenyewa . "</td>
                                                    <td>" . $u->noTelfon . "</td>
                                                    <td>" . $u->jenisKelamin . "</td>
                                                    <td>
                                                    <a href ='#' class='on-default edit-row btn btn-primary'
                                                        data-toggle='modal' data-target='#custom-width-modal' 
                                                        onClick=\"SetInput('" . $u->idt_penyewa . "','" . $u->namaPenyewa . "','" . $u->alamatPenyewa . "',
                                                        '" . $u->noTelfon . "','" . $u->jenisKelamin . "')\" class='col-sm-6 col-md-4 col-lg-3'>
                                                        <i class='fas fa-pen'></i></a>
                                                    <a href ='#' class='on-default default-row btn btn-danger'
                                                        data-toggle='modal' data-target='#delete-modal' 
                                                        onClick=\"setInput1('" . $u->idt_penyewa . "','" . $u->namaPenyewa . "','" . $u->alamatPenyewa . "',
                                                        '" . $u->noTelfon . "','" . $u->jenisKelamin . "')\" class='col-sm-6 col-md-4 col-lg-3'>
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
					<h5 class="modal-title" id="exampleModalLabel">DATA Penyewa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<form action="<?php echo base_url() . 'DataPenyewa/add'; ?>" method="post" enctype="multipart/form-data" accept="image/*">
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-1" class="control-label">Nama Penyewa</label>
								<input type="hidden" id="idt_penyewa" name="idt_penyewa">
								<input type="text" class="form-control" id="namaPenyewa" name="namaPenyewa" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Alamat</label>
								<input type="text" class="form-control" id="alamatPenyewa" name="alamatPenyewa" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Nomor Telepon</label>
								<input type="text" class="form-control" id="noTelfon" name="noTelfon" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Jenis Kelamin</label>
								<select class="form-control" id="jenisKelamin" name="jenisKelamin" data-style="btn-white" required>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
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
				<h4 class="modal-title" id="custom-width-modalLabel">DATA Penyewa</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<form action="<?php echo base_url('DataPenyewa/delete'); ?>" method="post" class="form-horizontal" role="form">
			</div>
			<div class="modal-body">
				<h4>Konfirmasi</h4>
				<p>Apakah anda yakin ingin menghapus data ini ?</p>
				<div class="form-group">
					<input type="hidden" id="idt_penyewa1" name="idt_penyewa1">
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
	function SetInput(idt_penyewa, namaPenyewa, alamatPenyewa, noTelfon, jenisKelamin) {
		document.getElementById('idt_penyewa').value = idt_penyewa;
		document.getElementById('namaPenyewa').value = namaPenyewa;
		document.getElementById('alamatPenyewa').value = alamatPenyewa;
		document.getElementById('noTelfon').value = noTelfon;
		document.getElementById('jenisKelamin').value = jenisKelamin;
	}

	function setInput1(idt_penyewa, namaPenyewa, alamatPenyewa, noTelfon, jenisKelamin) {
		document.getElementById('idt_penyewa1').value = idt_penyewa;
		document.getElementById('namaPenyewa1').value = namaPenyewa;
		document.getElementById('alamatPenyewa1').value = alamatPenyewa;
		document.getElementById('noTelfon1').value = noTelfon;
		document.getElementById('jenisKelamin1').value = jenisKelamin;
	}

	function ResetInput(idt_Penyewa, namaPenyewa, alamatPenyewa, noTelfon, jenisKelamin) {
		document.getElementById('idt_penyewa').value = "";
		document.getElementById('namaPenyewa').value = "";
		document.getElementById('alamatPenyewa').value = "";
		document.getElementById('noTelfon').value = "";
		document.getElementById('jenisKelamin').value = "";
	}
</script>
