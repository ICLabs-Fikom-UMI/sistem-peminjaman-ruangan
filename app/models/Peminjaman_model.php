<?php

class Peminjaman_model
{
    private $table = 'mst_peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $query = 'SELECT * FROM mst_peminjaman';

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getPeminajamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_peminjaman=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
