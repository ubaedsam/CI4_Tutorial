<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Product</h3>
              </div>
              <form action="<?= base_url('product/prosesEditProduct/'.$product['product_id']); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $product['product_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea class="form-control" rows="3" id="product_description" name="product_description"><?= $product['product_description'] ?></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
</div>