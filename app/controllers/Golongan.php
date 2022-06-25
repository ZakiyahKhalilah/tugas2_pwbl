<?php

class Golongan extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Golongan';
        $data['golongan'] = $this->model('Golongan_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('golongan/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data Golongan';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('golongan/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function formubah($id)
    {
        $data['title'] = 'Ubah Data Golongan';
        $data['ubahdata'] = $this->model('Golongan_model')->ubah($id);

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('golongan/ubah_data', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Golongan_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Golongan');
            exit;
        }
    }

    public function prosesubah()
    {
        if ($this->model('Golongan_model')->prosesubah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Golongan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Golongan_model')->hapus($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapuskan', 'success');
            header('Location: '.BASEURL.'Golongan');
            exit;
        }
    }

    
}
