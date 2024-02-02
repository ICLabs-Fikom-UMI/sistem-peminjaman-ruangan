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

            $thumbnail = $this->upload();

            if(!$thumbnail){
                return false;
            }

        //     $query = "INSERT INTO mst_ruangan (id_user, nama_ruangan, kapasitas, thumbnail, lokasi, deskripsi) 
        //   VALUES (?, ?, ?, ?, ?, ?)";

        //     $this->db->query($query);
        //     $this->db->bind(1, $data['id_user']);
        //     $this->db->bind(2, $data['nama_ruangan']);
        //     $this->db->bind(3, $data['kapasitas'] ?? null);
        //     $this->db->bind(4, $thumbnail);
        //     $this->db->bind(5, $data['lokasi']);
        //     $this->db->bind(6, $data['deskripsi'] ?? null);

             $query = "INSERT INTO mst_ruangan (nama_ruangan, kapasitas, thumbnail, lokasi, deskripsi) 
          VALUES (?, ?, ?, ?, ?)";
        
            $this->db->query($query);
            $this->db->bind(1, $data['nama_ruangan']);
            $this->db->bind(2, $data['kapasitas'] ?? null);
            $this->db->bind(3, $thumbnail);
            $this->db->bind(4, $data['lokasi']);
            $this->db->bind(5, $data['deskripsi'] ?? null);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            throw $e;
        }

        // try {
        //     $query = "INSERT INTO mst_ruangan VALUES ('', :nama_ruangan, :kapasitas, :thumbnail, :lokasi, :deskripsi)";

        //     $this->db->query($query);
        //     $this->db->bind('nama_ruangan', $data['nama_ruangan']);
        //     $this->db->bind('kapasitas', $data['kapasitas']);
        //     $this->db->bind('thumbnail', $data['thumbnail']);
        //     $this->db->bind('lokasi', $data['lokasi']);
        //     $this->db->bind('deskripsi', $data['deskripsi']);

        //     $this->db->execute();

        //     return $this->db->rowCount();

        // } catch (Exception $e) {
        //     echo $e;
        // }
    }

    public function upload(){
        $namaFile = $_FILES['thumbnail']['name'];
        $ukuranFile = $_FILES['thumbnail']['size'];
        $error = $_FILES['thumbnail']['error'];
        $tmpname = $_FILES['thumbnail']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
            alert('yang anda upload bukan gambar!');
            </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar 
        if($ukuranFile > 100000){
            echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpname, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }

    public function hitungTotalRuangan()
    {
        $query = 'SELECT COUNT(*) as total_ruangan FROM mst_ruangan';

        $this->db->query($query);
        $result = $this->db->single();

        return $result['total_ruangan'];
    }

    public function hitungRuanganTersedia()
    {
        $query = 'SELECT COUNT(*) as ruangan_tersedia FROM mst_ruangan WHERE status = "Tersedia"';
        $this->db->query($query);
        $result = $this->db->single();

        return $result['ruangan_tersedia'];
    }

    // public function hitungRuanganTidakTersedia()
    // {
    //     $this->db->query('SELECT COUNT(*) as ruangan_tidak_tersedia FROM mst_ruangan WHERE status = "Tidak Tersedia"');
    //     return $this->db->single();
    // }





    
}