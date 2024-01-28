<?php

class Jurusan_model {
    private $table = 'mst_jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJurusan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getJurusanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataJurusan($data)
    {
        $query = "INSERT INTO mst_jurusan VALUES (null,:namaJurusan, :ketuaJurusan)";

        $this->db->query($query);
        $this->db->bind('namaJurusan', $data['namaJurusan']);
        $this->db->bind('ketuaJurusan', $data['ketuaJurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hitungJumlahJurusan(){
        $this->db->query('SELECT COUNT(*) as jumlah FROM ' . $this->table);
        return $this->db->single();
    } 
}