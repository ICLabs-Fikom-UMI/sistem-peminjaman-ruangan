<?php

class Mahasiswa_model {
    private $table = 'mst_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $query = 'SELECT *
        FROM mst_user mu
        JOIN mst_role mr ON mu.id_role = mr.id_role
        LEFT JOIN mst_jurusan mj ON mu.id_jurusan = mj.id_jurusan';

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // public function tambahDataMahasiswa($data)
    // {
    //     $query = "INSERT INTO mst_user VALUES (null,:nama_lengkap, :nim, :email)";

    //     $this->db->query($query);
    //     $this->db->bind('nama_lengkap', $data['nama_lengkap']);
    //     $this->db->bind('nim', $data['nim']);
    //     $this->db->bind('email', $data['email']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    public function tambahDataMahasiswa($data)
    {

       try {
            $query = "INSERT INTO mst_user (id_role, id_jurusan, nama_lengkap, nim, email, password, no_telp) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->db->query($query);
            $this->db->bind(1, $data['id_role']);
            $this->db->bind(2, $data['id_jurusan'] ?? null);
            $this->db->bind(3, $data['nama_lengkap']);
            $this->db->bind(4, $data['nim'] ?? null);
            $this->db->bind(5, $data['email']);
            $this->db->bind(6, $data['password']);
            $this->db->bind(7, $data['no_telp'] ?? null);

            $this->db->execute();

            return $this->db->rowCount();
       } catch (Exception $e) {
        echo $e;
       }
    }


    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mst_user WHERE id_user = :id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        try {
            $query = "UPDATE mst_user SET 
        nama_lengkap = :nama_lengkap, 
        nim =:nim, 
        email=:email, 
        no_telp =:no_telp,
        id_jurusan = :id_jurusan,
        id_role = :id_role
        WHERE id_user= :id_user";

            $this->db->query($query);
            $this->db->bind('nama_lengkap', $data['nama_lengkap']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('id_jurusan', $data['id_jurusan']);
            $this->db->bind('id_role', $data['id_role']);
            $this->db->bind('id_user', $data['id_user']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }



    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }

    public function getTotalUsers()
    {
        $query = "SELECT COUNT(*) as count FROM mst_user";

        $this->db->query($query);
        $result = $this->db->single();

        return $result['count'];
    }

    public function getUser($email, $password)
    {
        $this->db->query("SELECT * FROM mst_user WHERE email = :email AND password = :password");
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        return $this->db->resultSet();
    }
}
