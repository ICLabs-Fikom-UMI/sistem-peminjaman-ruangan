<?php

class Peminjaman_model
{
    private $pj = 'trx_peminjaman';
    private $profile = 'mst_profile';
    private $ruangan = 'mst_ruangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $query = 'SELECT 
    tp.id_pinjam,
    tu.nama_profile AS nama_user,
    tr.nama_ruangan AS nama_ruangan,
    tp.tanggal_pinjam,
    tp.waktu_mulai,
    tp.waktu_selesai,
    tp.keperluan,
    tp.status
    FROM trx_peminjaman tp
   JOIN mst_profile tu ON tp.id_profile = tu.id_profile
   JOIN mst_ruangan tr ON tp.id_ruangan = tr.id_ruangan';

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getPeminajamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->pj . ' WHERE id_peminjaman=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
