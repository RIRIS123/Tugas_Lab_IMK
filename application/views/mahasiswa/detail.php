<div class="container">
    <div class="row mt-3">
        <div class="col-md-6" align="center">

            <div class="card" style="margin-left: 100px">
                <div class="card-header" align="center">
                    Detail Data
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nim']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['jenis_kelamin']; ?></p>
                    <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>