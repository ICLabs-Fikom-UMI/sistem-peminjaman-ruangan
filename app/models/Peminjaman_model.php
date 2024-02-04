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
        $query = 'SELECT *
        FROM trx_peminjaman tp
        JOIN mst_user mu ON tp.id_user = mu.id_user
        JOIN mst_ruangan mr ON tp.id_ruangan = mr.id_ruangan';

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_peminjaman=:id_peminjaman');
        $this->db->bind('id_peminjaman', $id);
        return $this->db->single();
    }

    public function tambahDataPeminjaman($data)
    {

        try {
            $query = "INSERT INTO trx_peminjaman (tanggal_pinjam, waktu_mulai, waktu_selesai) 
          VALUES (?, ?, ?)";

            $this->db->query($query);
            $this->db->bind(1, $data['tanggal_pinjam']);
            $this->db->bind(2, $data['waktu_mulai']);
            $this->db->bind(2, $data['waktu_selesai']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function getTotalPeminjaman()
    {
        $query = "SELECT COUNT(*) as total_peminjaman FROM trx_peminjaman";

        $this->db->query($query);
        $result = $this->db->single();

        return $result['total_peminjaman'];
    }


}
