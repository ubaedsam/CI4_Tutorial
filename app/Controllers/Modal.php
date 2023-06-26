<?php namespace App\Controllers;

use App\Models\CrudModalModel;
use TCPDF;
use PHPExcel;
use PHPExcel_IOFactory;

class Modal extends BaseController
{
	protected $CrudModalModel;

    public function __construct()
    {
        $this->CrudModalModel = new CrudModalModel();
		helper('form');
    }

	public function index()
	{
		$data = [
			'title' => 'Modal',
			'isi' => 'modal/v_modal',
			'barang' => $this->CrudModalModel->get_all_data(),
		];

		echo view('layout/v_wrapper', $data);
	}

	public function tambah()
	{
		$data = [
			'nama_barang' => $this->request->getPost('nama_barang'),
			'harga' => $this->request->getPost('harga'),
			'stock' => $this->request->getPost('stock'),
		];

		$this->CrudModalModel->add_data($data);
		session()->setFlashdata('success', 'Data barang berhasil ditambahkan');
		return redirect()->to(base_url('modal'));
	}

	public function edit($id_barang)
	{
		$data = [
			'nama_barang' => $this->request->getPost('nama_barang'),
			'harga' => $this->request->getPost('harga'),
			'stock' => $this->request->getPost('stock'),
		];

		$this->CrudModalModel->edit_data($data, $id_barang);
		session()->setFlashdata('success', 'Data barang berhasil diubah');
		return redirect()->to(base_url('modal'));
	}

	public function delete($id_barang)
	{
		$this->CrudModalModel->delete_data($id_barang);
		session()->setFlashdata('success', 'Data barang berhasil dihapus');
		return redirect()->to(base_url('modal'));
	}

	public function printallpdf()
	{
		$data = [
			'barang' => $this->CrudModalModel->get_all_data(),
		];

		$html = view('modal/v_printmodal', $data);

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->AddPage();
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
		$this->response->setContentType('application/pdf');
		$pdf->Output('databarang.pdf', 'I');
	}

	public function singleDataPdf($id_barang)
	{
		$data = [
			'barang' => $this->CrudModalModel->singlepdf($id_barang),
		];

		$html = view('modal/v_singledatamodal', $data);

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->AddPage();
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
		$this->response->setContentType('application/pdf');
		$pdf->Output('satudatabarang.pdf', 'I');
	}

	public function importexcel()
	{
		$file = $this->request->getFile('file_excel');

		new PHPExcel;
		// Mengambil lokasi temp file
		$fileLocation = $file->getTempName();
		// Membaca data file excel
		$objPHPExcel = PHPExcel_IOFactory::load($fileLocation);

		// Ambil sheet aktif
		$sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

		// melakukan perulangan untuk mengambil data
		foreach ($sheet as $key => $data){
			if($key == 1){
				continue;
			}
			
			// Skip jika data yang sama
			$nama_barang = $this->CrudModalModel->cek_data($data['B']);
			if($data['B'] == $nama_barang['nama_barang']){
				continue;
			}

			$data = array(
				'nama_barang' => $data['B'],
				'harga' => $data['C'],
				'stock' => $data['D'],
			);
			$this->CrudModalModel->importexcel($data);
		}

		session()->setFlashdata('success','Data barang berhasil di import');
		return redirect()->to(base_url('modal'));
	}
}