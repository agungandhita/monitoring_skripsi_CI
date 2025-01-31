<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Mahasiswa Skripsi',
            'mahasiswa' => $this->mahasiswaModel->findAll()
        ];
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa'
        ];
        return view('mahasiswa/create', $data);
    }

    public function store()
    {
        $this->mahasiswaModel->save([
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'program_studi' => $this->request->getVar('program_studi'),
            'judul_skripsi' => $this->request->getVar('judul_skripsi'),
            'dosen_pembimbing' => $this->request->getVar('dosen_pembimbing')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->find($id)
        ];
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->mahasiswaModel->update($id, [
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'program_studi' => $this->request->getVar('program_studi'),
            'judul_skripsi' => $this->request->getVar('judul_skripsi'),
            'dosen_pembimbing' => $this->request->getVar('dosen_pembimbing')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/mahasiswa');
    }
}