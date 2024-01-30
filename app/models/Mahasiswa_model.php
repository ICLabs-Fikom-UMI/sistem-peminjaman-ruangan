<?php

class Mahasiswa_model {
    private $table = 'mst_profile';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $query = 'SELECT
    mp.nama_profile,
    mu.email,
    mp.no_telp,
    mj.nama_jurusan AS jurusan,
    mr.nama_role AS role
FROM mst_profile mp
JOIN users mu ON mp.id_user = mu.id_user
JOIN mst_role mr ON mu.id_role = mr.id_role
JOIN mst_jurusan mj ON mp.id_jurusan = mj.id_jurusan';

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_profile=:id');
        $this->db->bind('id_profile', $id);
        return $this->db->single();
    }

    // public function tambahDataMahasiswa($data)
    // {
    //     $query = "INSERT INTO mahasiswa VALUES (null,:nama, :nim, :email, :jurusan)";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nim', $data['nim']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mst_profile (nama_profile, nim, no_telp, alamat, id_user, id_jurusan)
              VALUES (:nama, :nim, :no_telp, :alamat, :id_user, :id_jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_user', $data['id_user']); // Sesuaikan dengan cara mendapatkan ID user yang sesuai
        $this->db->bind('id_jurusan', $data['id_jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // public function ubahDataMahasiswa($data)
    // {
    //     $query = "UPDATE mahasiswa SET 
    //     nama = :nama, 
    //     nim =:nim, 
    //     email=:email, 
    //     jurusan =:jurusan 
    //     WHERE id= :id";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nim', $data['nim']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    public function ubahDataMahasiswa($data)
{
    $query = "UPDATE mst_profile SET 
        nama_profile = :nama, 
        nim = :nim, 
        no_telp = :no_telp, 
        alamat = :alamat 
        WHERE id_profile = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('no_telp', $data['no_telp']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
}


    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }
}