<?php 

class cartModel extends Dmodel {

    public function __construct()
    {
        parent::__construct();
    }

    public function insertCart($table,$data){
        return $this->db->insert($table,$data);
    }
    public function updateCart($table,$data,$conditon){
        return $this->db->update($table,$data,$conditon);
    }
    public function deleteCart($table,$conditon){
        return $this->db->delete($table,$conditon);
    }
    public function selectCartAll($table){
        $sql = "SELECT * FROM $table";
        return $this->db->select($sql);
    }
}
?>