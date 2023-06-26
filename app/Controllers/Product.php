<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

	public function index()
	{
		$data = [
			'title' => 'Product',
			'isi' => 'product/v_product',
            'product' => $this->ProductModel->getData_Product(),
		];

		echo view('layout/v_wrapper', $data);
	}

	public function addProduct()
	{
		$data = [
			'title' => 'Tambah Data Product',
			'isi' => 'product/v_addproduct',
		];

		echo view('layout/v_wrapper', $data);
	}

	public function prosesAddProduct()
	{
		$data = [
			'product_name' => $this->request->getPost('product_name'),
			'product_description' => $this->request->getPost('product_description'),
		];

		$this->ProductModel->insert_product($data);
		session()->setFlashdata('success', 'Data product berhasil ditambahkan');
		return redirect()->to(base_url('product'));
	}

	public function editProduct($product_id)
	{
		$data = [
			'title' => 'Edit Data Product',
			'product' => $this->ProductModel->edit_product($product_id),
			'isi' => 'product/v_editproduct',
		];

		echo view('layout/v_wrapper', $data);
	}

	public function prosesEditProduct($product_id)
	{
		$data = [
			'product_name' => $this->request->getPost('product_name'),
			'product_description' => $this->request->getPost('product_description'),
		];

		$this->ProductModel->update_product($data, $product_id);
		session()->setFlashdata('success', 'Data product berhasil diubah');
		return redirect()->to(base_url('product'));
	}

	public function prosesDeleteProduct($product_id)
	{
		$this->ProductModel->delete_product($product_id);
		session()->setFlashdata('success', 'Data product berhasil dihapus');
		return redirect()->to(base_url('product'));
	}
}