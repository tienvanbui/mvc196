<?php

class Dmodel{
    protected $db = array();

    public function __construct()
    {
        $connect = "mysql:host=localhost;dbname=phoneaccessoriesshop;";
        $userName = 'root';
        $password = '';
        $this->db = new DB($connect,$userName,$password);
    }
    

}
?>