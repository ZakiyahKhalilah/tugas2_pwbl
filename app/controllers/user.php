<?php

class user extends Controller
{
    public function index()
    {
        $data['title'] = 'Data user';
        $data['user'] = $this->model('user_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data user';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('user/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function formubah($id)
    {
        $data['title'] = 'Ubah Data user';
        $data['ubahdata'] = $this->model('user_model')->ubah($id);

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('user/ubah_data', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('user_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'user');
            exit;
        }
    }

    public function prosesubah()
    {
        if ($this->model('user_model')->prosesubah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'user');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('user_model')->hapus($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapuskan', 'success');
            header('Location: '.BASEURL.'user');
            exit;
        }
    }

    
}
