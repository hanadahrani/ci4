<?php

namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    
    protected $todo;

    function __construct(){
        $this->todo = new TodoModel();
    }

    public function index()
    {
        $data['tasks'] = $this->todo->findAll();
        return view('todo', $data);
    }

    public function create()
    {
        return view('todo_create');
    }

    public function store()
    {
        if (!$this->validate([
                'task'=>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],
                'start_date'=>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],
                'end_date'=>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],

            ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->todo->insert([
            'task' => $this->request->getVar('task'),
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
            'status' => "Ongoing",
        ]);
        session()->setFlashdata('message', "Data berhasil disimpan");
        return redirect()->to('/');
    }

    public function edit($id)
    {
        $dataTodo = $this->todo->find($id);
        if (empty($dataTodo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }
        $data['tasks'] = $dataTodo;
        return view('todo_edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
                'task'=>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],
                'start_date'=>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],
                'end_date'=>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->todo->update($id, [
            'task' => $this->request->getVar('task'),
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
            'status' => $this->request->getVar('status'),
        ]);
        session()->setFlashdata('message', 'Data berhasil diubah');
        return redirect()->to('/');
    }
    

    public function delete($id)
    {
        
        $dataTodo = $this->todo->find($id);
        if (empty($dataTodo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }
        $this->todo->delete($id);
        session()->setFlashdata('message', "Data berhasil dihapus");
        return redirect()->to('/');
    }

    
}
