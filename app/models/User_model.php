<?php

Class User_model {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    
    public function getUserByEmail($email){
        $this->db->query("SELECT * FROM mst_user tu
        JOIN mst_role tr ON tu.id_role = tr.id_role
        WHERE email = :email");
        $this->db->bind('email', $email);
        return $this->db->resultSet();
    }
}