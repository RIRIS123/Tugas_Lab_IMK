<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header" align="center"> 
                    FORM UBAH DATA
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="center">
                            <label for="nim">NIM_________:</label>
                            <input type="text" name="nim" class="center" id="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="center">
                            <label for="nama">Nama_______:</label>
                            <input type="text" name="nama" class="center" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria"> Pria <br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita"> Wanita <br>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="center">
                            <label for="alamat">Alamat______:</label>
                            <input type="text" name="alamat" class="center" id="alamat" value="<?= $mahasiswa['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>