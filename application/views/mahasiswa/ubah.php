<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
  				<div class="card-header">
    				Form Ubah Data Mahasiswa
  				</div>
  				<div class="card-body">
    			<form action="" method="post">
					<div class="form-group">
    					<label for="nama">Nama</label>
    					<input type="text" name="nama" class="form-control" id="nama">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
  					</div>
  					<div class="form-group">
    					<label for="nrp">NRP</label>
    					<input type="text" name="nrp" class="form-control" id="nrp">
              <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
  					</div>
  					<div class="form-group">
    					<label for="email">Email</label>
    					<input type="text" name="email" class="form-control" id="email">
              <small class="form-text text-danger"><?= form_error('email'); ?></small>
  					</div>
  					<div class="form-group">
    					<label for="jurusan">Jurusan</label>
    					<select class="form-control" id="jurusan" name="jurusan">
	      					<option value="Teknik Informatika">Teknik Informatika</option>
	      					<option value="Teknik Mesin">Teknik Mesin</option>
	      					id="jurusan" name="jurusan">
	      					<option value="Teknik Industri">Teknik Industri</option>
	      					id="jurusan" name="jurusan">
	      					<option value="Teknik Pangan">Teknik Pangan</option>
	      					id="jurusan" name="jurusan">
	      					<option value="Teknik Planologi">Teknik Planologi</option>
	      					id="jurusan" name="jurusan">
	      					<option value="Teknik Lingkungan">Teknik Lingkungan</option>
    					</select>
  					</div>
  					<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
				  </form>
  				</div>
			</div>

		</div>	
	</div>

</div>