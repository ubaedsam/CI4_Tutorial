<div class="col-md-12">
    <div class="card-body">
    <a href="<?= base_url('product/addProduct') ?>" class="btn btn-primary btn-md mb-3">Tambah Data</a>
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
                <th>Nama Product</th>
                <th>Deskripsi Product</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($product as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['product_name']; ?></td>
                <td><?= $value['product_description']; ?></td>
                <td>
                    <a href="<?= base_url('product/editProduct/' .$value['product_id']) ?>" class="btn btn-warning btn-md">Edit</a>
                    <a href="<?= base_url('product/prosesDeleteProduct/' .$value['product_id']) ?>" class="btn btn-danger btn-md" onClick="return confirm('Apakah anda yakin ingin menghapus data product ini ?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>