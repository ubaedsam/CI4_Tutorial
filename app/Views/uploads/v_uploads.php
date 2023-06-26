<div class="col-md-12">
    <!-- Pesan jika upload berhasil -->
    <?php 
        if(!empty(session()->getFlashdata('success'))){ ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php }
    ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Data Multiple Gambar</h3>
              </div>
              <?= form_open_multipart(base_url('uploads/simpan')) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                  <div class="form-group">
                    <label>Gambar/Foto</label>
                    <input type="file" class="form-control" id="gambar" name="file_upload[]" multiple="true">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              <?= form_close() ?>
            </div>
</div>