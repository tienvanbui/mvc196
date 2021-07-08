<?php

class loginModel extends Dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function logIn($table_adminLofin,$username,$password){
        $sql = "SELECT * FROM $table_adminLofin WHERE username = ? AND password = ? ";
        return $this->db->affectedRows( $sql,$username,$password);
    }
    public function getLogIn($table_adminLofin,$username,$password){
        $sql = "SELECT * FROM $table_adminLofin WHERE username = ? AND password = ? ";
        return $this->db->selectUser($sql,$username,$password);
    }
}

?>