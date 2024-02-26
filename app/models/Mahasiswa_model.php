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
        LEFT JOIN mst_role mr ON mu.id_role = mr.id_role
        LEFT JOIN mst_jurusan mj ON mu.id_jurusan = mj.id_jurusan';

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . '
        JOIN mst_jurusan mj ON mst_user.id_jurusan = mj.id_jurusan
        WHERE id_user=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data, $newPassword)
    {
        try {
            // $validasiResult = $this->validasiRegistrasi($data);
            // if (!$validasiResult) {
            //     return false;
            // }
            // $password = $validasiResult;

            $id_role = $data['id_role'] ?? 4;


            $query = "INSERT INTO mst_user (id_role, id_jurusan, nama_lengkap, nim, email, password, no_telp) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->db->query($query);
            $this->db->bind(1, $id_role);
            $this->db->bind(2, $data['id_jurusan']);
            $this->db->bind(3, $data['nama_lengkap']);
            $this->db->bind(4, $data['nim']);
            $this->db->bind(5, $data['email']);
            $this->db->bind(6, $newPassword);
            $this->db->bind(7, $data['no_telp'] ?? null);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

    // public function validasiRegistrasi()
    // {
    //     $email = strtolower(stripslashes($_POST["email"]));
    //     $password = $this->db->get_connection()->quote($_POST["password"]);
    //     $password2 = $this->db->get_connection()->quote($_POST["confirm_password"]);

    //     // cek email sudah ada atau belum
    //     $query = "SELECT email FROM mst_user WHERE email = ?";
    //     $this->db->query($query);
    //     $this->db->bind(1, $email);
    //     $result = $this->db->single();

    //     if ($result) {
    //         echo "<script>
    //     alert('username yang dipilih sudah terdaftar!')
    //     </script>";
    //         return false;
    //     }

    //     // cek konfirmasi password
    //     if ($password !== $password2) {
    //         echo "<script>
    //     alert('konfirmasi password tidak sesuai!');
    //     </script>";
    //         return false;
    //     }

    //     // enkripsi password
    //     $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    //     return $encryptedPassword;
    // }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mst_user WHERE id_user = :id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data, $newPassword)
    {

        try {
            $query = "UPDATE mst_user SET 
        nama_lengkap = :nama_lengkap, 
        nim =:nim, 
        email=:email, 
        password = :password,
        no_telp =:no_telp,
        id_jurusan = :id_jurusan,
        id_role = :id_role
        WHERE id_user= :id_user";

            $this->db->query($query);
            $this->db->bind('nama_lengkap', $data['nama_lengkap']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('password', $newPassword);
            $this->db->bind('id_jurusan', $data['id_jurusan']);
            $this->db->bind('id_role', $data['id_role']);
            $this->db->bind('id_user', $data['id_user']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }
    // public function ubahDataMahasiswa($data, $newPassword)
    // {
    //     try {
    //         $query = "UPDATE mst_user SET 
    //     nama_lengkap = :nama_lengkap, 
    //     nim =:nim, 
    //     email=:email, 
    //     password = :password,
    //     no_telp =:no_telp,
    //     id_jurusan = :id_jurusan,
    //     id_role = :id_role
    //     WHERE id_user= :id_user";

    //         $this->db->query($query);
    //         $this->db->bind('nama_lengkap', $data['nama_lengkap']);
    //         $this->db->bind('nim', $data['nim']);
    //         $this->db->bind('email', $data['email']);
    //         $this->db->bind('no_telp', $data['no_telp']);
    //         $this->db->bind('password', $newPassword);
    //         $this->db->bind('id_jurusan', $data['id_jurusan']);
    //         $this->db->bind('id_role', $data['id_role']);
    //         $this->db->bind('id_user', $data['id_user']);

    //         $this->db->execute();

    //         return $this->db->rowCount();
    //     } catch (Exception $e) {
    //         echo $e;
    //     }
    // }



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

    public function update_profile($data, $id_user){
        try {
            $query = "UPDATE mst_user SET 
        nama_lengkap = :nama_lengkap, 
        nim =:nim, 
        email=:email, 
        no_telp =:no_telp,
        alamat = :alamat,
        id_jurusan = :id_jurusan
        WHERE id_user= :id_user";

            $this->db->query($query);
            $this->db->bind('nama_lengkap', $data['nama_lengkap']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('id_jurusan', $data['id_jurusan']);
            $this->db->bind('id_user', $id_user);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function update_email($new_email, $id_user){
        try {
            $query = "UPDATE mst_user SET email = :email WHERE id_user = :id_user";

            $this->db->query($query);
            $this->db->bind('email', $new_email);
            $this->db->bind('id_user', $id_user);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e;
        }
    }

}
