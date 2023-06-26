<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Data Barang</h1>
        </div>
        <div class="col-md-12">
            <a href="<?= base_url('modal/printallpdf') ?>" target="_blank" class="btn btn-primary">Print PDF ALL Data</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Tambah
            </button>
            <?php echo form_open_multipart('modal/importexcel') ?>
                <div class="form-group">
                    <label>Import File Excel</label>
                    <input type="file" name="file_excel" class="form-control-file" accept=".xls, .xlsx">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-success">Proses Import Excel</button>
                </div>
            <?php echo form_close() ?>
            <br><br>
            <?php 
                if(!empty(session()->getFlashdata('success'))){ ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php }
            ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($barang as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['nama_barang']; ?></td>
                        <td><?= $value['harga']; ?></td>
                        <td><?= $value['stock']; ?></td>
                        <td>
                            <a href="<?= base_url('modal/singleDataPdf/' .$value['id_barang']) ?>" target="_blank" class="btn btn-info btn-md">PDF</a>
                            <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#edit<?= $value['id_barang']; ?>">Edit</button>
                            <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#delete<?= $value['id_barang']; ?>">Delete</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('modal/tambah') ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
            </div>
        </div>
        </div>

        <!-- Modal Edit -->
        <?php foreach ($barang as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value['id_barang'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Barang <?= $value['nama_barang'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('modal/edit/'.$value['id_barang']) ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $value['nama_barang'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $value['harga'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="<?= $value['stock'] ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            <?php echo form_close() ?>
            </div>
        </div>
        </div>
        <?php } ?>

        <!-- Modal Delete -->
        <?php foreach ($barang as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?= $value['nama_barang'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data barang ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url('modal/delete/' . $value['id_barang']); ?>" type="submit" class="btn btn-danger">Delete</a>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
    </div>
</div>