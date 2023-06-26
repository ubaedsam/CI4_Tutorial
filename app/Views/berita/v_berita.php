<?php foreach ($berita as $key => $value){ ?>
    <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Judul : <?= $value['judul']; ?>
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <ul>
          <li>Deskripsi : <?= $value['isi_berita']; ?></li>
          <li>Gambar : <?= $value['gambar']; ?></li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
<?php } ?>

<div class="container">
    <div class="col-md-12">
        <?= $pager->links('berita','pagination'); ?>
    </div>
</div>