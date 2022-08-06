<?php

namespace App\Controllers;

use App\Models\PesertaModel;

class Peserta extends BaseController
{
	protected $peserta;

	function __construct(){
		$this->peserta = new PesertaModel();

	}

    public function index()
    {
    	$data['peserta'] = $this->peserta->findAll();

        return view('peserta', $data);

    }

    public function create()
    {
        return view('peserta_create');
    }

    public function store()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->peserta->insert([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ]);
        session()->setFlashdata('message', 'Data berhasil disimpan');
        return redirect()->to('/peserta');


    }

    public function edit($id)
    {
        $dataPeserta = $this->todo->find($id);
        if (empty($dataPeserta)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }
        $data['peserta'] = $dataPeserta;
        return view('peserta_edit', $data);
    }


    public function delete($id)
    {
        
        $dataPeserta = $this->peserta->find($id);
        if (empty($dataPeserta)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }
        $this->peserta->delete($id);
        session()->setFlashdata('message', "Data berhasil dihapus");
        return redirect()->to('/peserta');
    }

    
}
