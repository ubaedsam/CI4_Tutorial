<div class="col-md-12">
    <!-- Pesan jika tambah berhasil -->
    <?php 
        if(!empty(session()->getFlashdata('success'))){ ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php }
    ?>
    <!-- Pesan jika tambah gagal -->
    <?php 
        $inputs = session()->getFlashdata('inputs');
        $errors = session()->getFlashdata('errors');

        if(!empty($errors)){ ?>
            <div class="alert alert-danger">
                Ada kesalahan input data yaitu :
                <ul>
                    <?php foreach ($errors as $error) {?>
                        <li><?= esc($error) ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php }
    ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Validasi Data Siswa</h3>
              </div>
              <?= form_open_multipart(base_url('siswa/simpan')) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nis</label>
                    <input type="text" class="form-control" id="nis" name="nis" value="<?= old('nis');?>">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label>Foto Siswa</label>
                    <input type="file" class="form-control" id="foto_siswa" name="foto_siswa">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              <?= form_close() ?>
            </div>
</div>