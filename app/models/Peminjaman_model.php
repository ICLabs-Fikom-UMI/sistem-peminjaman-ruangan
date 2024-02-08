<?php

class Peminjaman_model
{
    private $table = 'trx_peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $query = 'SELECT *
                  FROM trx_peminjaman tp
                  LEFT JOIN mst_user mu ON tp.id_user = mu.id_user
                  LEFT JOIN mst_ruangan mr ON tp.id_ruangan = mr.id_ruangan;';

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

            $file = $this->uploadFile();

            if (!$file) {
                return false;
            }


            $query = "INSERT INTO trx_peminjaman (id_ruangan, tanggal_pinjam, waktu_mulai, waktu_selesai, keperluan, jumlah_peserta, file) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->db->query($query);
            $this->db->bind(1, $data['id_ruangan']);
            $this->db->bind(2, $data['tanggal_pinjam']);
            $this->db->bind(3, $data['waktu_mulai']);
            $this->db->bind(4, $data['waktu_selesai']);
            $this->db->bind(5, $data['kegiatan']);
            $this->db->bind(6, $data['jumlah_peserta']);
            $this->db->bind(7, $file);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

    function uploadFile()
    {
        // Mengambil informasi file
        $namaFile = $_FILES['file_dokumen']['name'];
        $tmpName = $_FILES['file_dokumen']['tmp_name'];
        $ukuranFile = $_FILES['file_dokumen']['size'];
        $error = $_FILES['file_dokumen']['error'];

        // cek apakah tidak ada file yang diupload
        if ($error === 4) {
            echo '<div class="alert alert-danger" role="alert">Pilih file terlebih dahulu!</div>';
            return false;
        }

        // cek ekstensi file
        $ekstensiFileValid = ['pdf'];
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));
        if (!in_array($ekstensiFile, $ekstensiFileValid)) {
            echo "<script>
        alert('Yang anda upload bukan file PDF!');
        </script>";
            return false;
        }

        // cek ukuran file (maksimum 10 MB)
        $maxFileSize = 10 * 1024 * 1024; // 10 MB dalam bytes
        if ($ukuranFile > $maxFileSize) {
            echo "<script>
        alert('Ukuran file terlalu besar! Maksimum 10MB.');
        </script>";
            return false;
        }

        // lolos pengecekan, file siap diupload
        // generate nama file baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;

        move_uploaded_file($tmpName, 'pdf_files/' . $namaFileBaru);

        return $namaFileBaru;
    }

    public function getTotalPeminjaman()
    {
        $query = "SELECT COUNT(*) as total_peminjaman FROM trx_peminjaman";

        $this->db->query($query);
        $result = $this->db->single();

        return $result['total_peminjaman'];
    }


}
