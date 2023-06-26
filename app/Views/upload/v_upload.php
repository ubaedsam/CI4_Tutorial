<div class="col-md-12">
    <!-- Pesan jika upload berhasil -->
    <?php 
        if(!empty(session()->getFlashdata('success'))){ ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php }
    ?>
    <!-- Pesan jika upload gagal -->
    <?php 
        $errors = $validation->getErrors();
        if(!empty($errors)){ ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors(); ?>
            </div>
        <?php }
    ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Data Gambar</h3>
              </div>
              <?= form_open_multipart(base_url('upload/simpan')) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" rows="3" id="keterangan" name="keterangan"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              <?= form_close() ?>
            </div>
</div>
<div class="col-md-12">
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($upload as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <img src="<?= base_url('folder_upload/'.$value['gambar']); ?>" width="200">
                </td>
                <td><?= $value['keterangan']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>