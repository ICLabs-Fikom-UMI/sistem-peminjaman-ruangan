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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_jurusan=:id_jurusan');
        $this->db->bind('id_jurusan', $id);
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

    public function ubahDataJurusan($data)
    {
        try {
            $query = "UPDATE mst_jurusan SET 
        nama_jurusan = :nama_jurusan , 
        ketua_jurusan =:ketua_jurusan
        WHERE id_jurusan= :id_jurusan";

            $this->db->query($query);
            $this->db->bind('nama_jurusan', $data['namaJurusan']);
            $this->db->bind('ketua_jurusan', $data['ketuaJurusan']);
            $this->db->bind('id_jurusan', $data['id_jurusan']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function hapusDataJurusan($id)
    {
        try {
            $query = "DELETE FROM mst_jurusan WHERE id_jurusan = :id_jurusan";

            $this->db->query($query);
            $this->db->bind('id_jurusan', $id);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function hitungJumlahJurusan(){
        $this->db->query('SELECT COUNT(*) as jumlah FROM ' . $this->table);
        return $this->db->single();
    } 
}