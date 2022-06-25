<?php

class Golongan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data)
    {
        $query = "INSERT INTO tb_golongan VALUES ('', :gol_kode, :gol_nama, :created_at, :updated_at)";

        $this->db->query($query);
        $this->db->bind('gol_kode', $data['gol_kode']);
        $this->db->bind('gol_nama', $data['gol_nama']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM tb_golongan ORDER BY gol_id DESC");
        return $this->db->resultSet();
    }

    public function ubah($id)
    {
        $this->db->query("SELECT * FROM tb_golongan WHERE gol_id = :gol_id");
        $this->db->bind('gol_id', $id);
        return $this->db->resultSet();
    }

    public function prosesubah($data)
    {
        $query = "UPDATE tb_golongan SET gol_kode = :gol_kode, gol_nama = :gol_nama, 
        created_at = :created_at updated_at = :updated_at WHERE gol_id = :gol_id";

        $this->db->query($query);
        $this->db->bind('gol_kode', $data['gol_kode']);
        $this->db->bind('gol_nama', $data['gol_nama']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);
        $this->db->bind('gol_id', $data['gol_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM tb_golongan WHERE gol_id = :gol_id";

        $this->db->query($query);
        $this->db->bind('gol_id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
