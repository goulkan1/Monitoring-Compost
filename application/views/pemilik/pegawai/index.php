
<div class="pull-left">
    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#modalku">Tambah data</a>
</div>
<br><br>
<table class="table table-striped table-bordered" id="data">
<thead>
    <tr>
        <th>Id</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Nomor HP</th>
        <th>Tanggal Daftar</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
</thead>
    <tbody>
    <?php foreach($pegawai as $p){ ?>
        <tr>
        <td><?php echo $p['id_user']; ?></td>
        <td><?php echo $p['nama_depan']; ?></td>
        <td><?php echo $p['nama_belakang']; ?></td>
        <td><?php echo $p['nmr_hp']; ?></td>
        <td><?php echo $p['tgl_daftar']; ?></td>
        <td><?php echo $p['username']; ?></td>
        <td><?php echo $p['password']; ?></td>
        <td>
            <a href="<?php echo site_url('manage_pegawai/edit/'.$p['id_user']); ?>" class="btn btn-info btn-xs">Ubah</a>
            <a href="<?php echo site_url('manage_pegawai/delete/'.$p['id_user']); ?>" class="btn btn-danger btn-xs">Hapus</a>
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#data').DataTable();

   
    });
</script>
    <div id="modalku" class="modal" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah data pegawai</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                	<form method="post" action="<?php echo site_url('manage_pegawai/add');?>">
                	<div class="form-horizontal">	
						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Nama Depan</label>
							<div class="col-md-8">
								<input type="text" name="nama_depan" value="<?php echo $this->input->post('nama_depan'); ?>" class="form-control" id="dp" />
							</div>
						</div>
						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Nama Belakang</label>
							<div class="col-md-8">
								<input type="text" name="nama_belakang" value="<?php echo $this->input->post('nama_belakang'); ?>" class="form-control" id="dp" />
							</div>
						</div>
						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Nomor HP</label>
							<div class="col-md-8">
								<input type="text" name="nmr_hp" value="<?php echo $this->input->post('nmr_hp'); ?>" class="form-control" id="dp" />
							</div>
						</div>

						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Username</label>
							<div class="col-md-8">
								<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="dp" />
							</div>
						</div>

						<div class="form-group">
							<label for="dp" class="col-md-4 control-label">Password</label>
							<div class="col-md-8">
								<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="dp" />
							</div>
						</div>

					

					</div>
                </div>

                <!-- footer modal -->
                <div class="modal-footer">
                    <button id = 'tambah' type="submit" class="btn btn-success" >Simpan</button>
                    <button id = 'tambah' type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>