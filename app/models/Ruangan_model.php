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
        $query = 'SELECT * FROM mst_ruangan mr
        LEFT JOIN mst_user mu ON mr.id_user = mu.id_user';
        // $this->db->query('SELECT * FROM ' . $this->table);
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getRuanganById($id)
    {
        $this->db->query('SELECT * FROM mst_ruangan mr
        JOIN mst_user tu ON mr.id_user = tu.id_user
        WHERE id_ruangan=:id_ruangan');
        $this->db->bind('id_ruangan', $id);
        return $this->db->single();
    }

    public function hapusDataRuangan($id)
    {
        $query = "DELETE FROM mst_ruangan WHERE id_ruangan = :id_ruangan";

        $this->db->query($query);
        $this->db->bind('id_ruangan', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataRuangan($data)
    {
        try {

            $query = "INSERT INTO mst_ruangan (id_user, nama_ruangan, kapasitas, thumbnail, lokasi, deskripsi) 
          VALUES (?, ?, ?, ?, ?, ?)";

            $this->db->query($query);
            $this->db->bind(1, $data['id_user']);
            $this->db->bind(2, $data['nama_ruangan']);
            $this->db->bind(3, $data['kapasitas'] ?? null);
            $this->db->bind(4, $data['thumbnail']);
            $this->db->bind(5, $data['lokasi']);
            $this->db->bind(6, $data['deskripsi'] ?? null);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            throw $e;
        }

    }

    public function hitungTotalRuangan()
    {
        $query = 'SELECT COUNT(*) as total_ruangan FROM mst_ruangan';

        $this->db->query($query);
        $result = $this->db->single();

        return $result['total_ruangan'];
    }


    public function countTotalRuanganTersedia()
    {
        // Query untuk menghitung jumlah total ruangan yang memiliki status tersedia
        $query = "SELECT COUNT(*) AS total_ruangan FROM mst_ruangan WHERE status_ruangan = 'Tersedia'";

        // Eksekusi query
        $this->db->query($query);
        $total_ruangan = $this->db->single()['total_ruangan'];

        return $total_ruangan;
    }

    public function countTotalRuanganTidakTersedia()
    {
        // Query untuk menghitung jumlah total ruangan yang memiliki status tersedia
        $query = "SELECT COUNT(*) AS total_ruangan FROM mst_ruangan WHERE status_ruangan = 'Tidak Tersedia'";

        // Eksekusi query
        $this->db->query($query);
        $total_ruangan = $this->db->single()['total_ruangan'];

        return $total_ruangan;
    }


    public function ubahDataRuangan($data)
    {
        try {
            $query = "UPDATE mst_ruangan SET 
        id_user = :id_user,
        nama_ruangan = :nama_ruangan, 
        kapasitas =:kapasitas, 
        thumbnail =:thumbnail, 
        lokasi =:lokasi,
        deskripsi = :deskripsi
        WHERE id_ruangan= :id_ruangan";

            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('nama_ruangan', $data['nama_ruangan']);
            $this->db->bind('kapasitas', $data['kapasitas']);
            $this->db->bind('thumbnail', $data['thumbnail']);
            $this->db->bind('lokasi', $data['lokasi']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('id_ruangan', $data['id_ruangan']);

            $this->db->execute();

            return $this->db->rowCount();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function cariDataRuangan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mst_ruangan WHERE nama_ruangan LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function ubahStatusRuangan($id_ruangan, $status){
        $query = "UPDATE mst_ruangan SET status_ruangan = :status WHERE id_ruangan = :id";
        $this->db->query($query);
        $this->db->bind('status', $status);
        $this->db->bind('id', $id_ruangan);
        $this->db->execute();
        return $this->db->rowCount();
    }

}