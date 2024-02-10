<?php

class Role_model {
    private $table = 'mst_role';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRole()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRoleById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_role=:id_role');
        $this->db->bind('id_role', $id);
        return $this->db->single();
    }

    public function getKoordinatorLabUsers()
    {
        $query = "SELECT mst_user.id_user, mst_user.nama_lengkap FROM mst_user
              JOIN mst_role ON mst_user.id_role = mst_role.id_role
              WHERE mst_role.nama_role = 'Koordinator Lab'";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getCountByRole($roleName)
    {
        $query = "SELECT COUNT(*) as count FROM mst_user mu
                  JOIN mst_role mr ON mu.id_role = mr.id_role
                  WHERE mr.nama_role = :roleName";

        $this->db->query($query);
        $this->db->bind('roleName', $roleName);
        $result = $this->db->single();

        return $result['count'];
    }

    public function getCountAdmin()
    {
        return $this->getCountByRole('admin');
    }

    public function getCountUser()
    {
        return $this->getCountByRole('user');
    }

    public function getCountKoordinatorLab()
    {
        return $this->getCountByRole('koordinator lab');
    }

    public function getCountKepalaLab()
    {
        return $this->getCountByRole('kepala lab');
    }

    public function getLevel($role)
    {
        // Lakukan query ke tabel role untuk mendapatkan level berdasarkan peran (role)
        $this->db->query('SELECT level FROM mst_role WHERE nama_role = :role');
        $this->db->bind(':role', $role);
        $result = $this->db->single();

        // Kembalikan level jika query berhasil, atau kembalikan null jika tidak ditemukan
        return $result ? $result['level'] : null;
    }
}