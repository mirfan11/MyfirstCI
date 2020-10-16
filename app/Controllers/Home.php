<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    //--------------------------------------------------------------------

	public function show() {
        $data['nama'] = 'Muhammad Irfan';
        $data['npm'] = '1817051071';
        echo view('mahasiswa/header', $data);
        echo view('mahasiswa/index', $data);
        echo view('mahasiswa/footer', $data);

	}
}
