<?php

class Ruangan_model{
    private $table = 'mst_ruangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRuangan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRuanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id_ruangan');
        $this->db->bind('id_ruangan', $id);
        return $this->db->single();
    }
}