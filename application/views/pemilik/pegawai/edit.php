<form method="post" action="
<?php 
echo site_url('manage_pegawai/edit/'.$pegawai['id_user']);
?>">
  <div class="form-horizontal">	
						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Nama Depan</label>
							<div class="col-md-8">
								<input type="text" name="nama_depan" value="<?php echo ($this->input->post('nama_depan') ? $this->input->post('nama_depan') : $pegawai['nama_depan']); ?>" class="form-control" id="nama_depan" />
							</div>
						</div>
						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Nama Belakang</label>
							<div class="col-md-8">
								<input type="text" name="nama_belakang" value="<?php echo ($this->input->post('nama_depan') ? $this->input->post('nama_belakang') : $pegawai['nama_belakang']); ?>" class="form-control" id="nama_depan" />
							</div>
						</div>
						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Nomor HP</label>
							<div class="col-md-8">
								<input type="text" name="nmr_hp" value="<?php echo ($this->input->post('nmr_hp') ? $this->input->post('nmr_hp') : $pegawai['nmr_hp']); ?>" class="form-control" id="nama_depan" />
							</div>
						</div>

						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Username</label>
							<div class="col-md-8">
								<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $pegawai['username']); ?>" class="form-control" id="nama_depan" />
							</div>
						</div>

						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Password</label>
							<div class="col-md-8">
								<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $pegawai['password']); ?>" class="form-control" id="nama_depan" />
							</div>
						</div>

                <!-- footer modal -->
                <div class="modal-footer">
                    <button id = 'tambah' type="submit" class="btn btn-success" >Simpan</button>
                </div>
</form>