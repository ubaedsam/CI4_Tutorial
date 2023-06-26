<?php namespace App\Controllers;
use App\Models\ChartModel;

class Chart extends BaseController
{
	protected $ChartModel;

    public function __construct()
    {
        $this->ChartModel = new ChartModel();
    }

	public function grafik()
	{
		$data = [
			'title' => 'Chart',
			'isi' => 'chart/v_chart',
			'chart' => $this->ChartModel->getData_Chart(),
		];

		echo view('layout/v_wrapper', $data);
	}
}