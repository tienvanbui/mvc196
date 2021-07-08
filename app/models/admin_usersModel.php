<?php

class admin_usersModel extends Dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectUsersAll($table){
        $sql = "SELECT * FROM $table ";
        return $this->db->select($sql);
    }

}
?>