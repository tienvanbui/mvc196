<?php

class homeModel extends Dmodel{
    public function __construct()
    {
        parent::__construct();
    }
       public function updateHome($table,$data,$conditon){
           return $this->db->update($table,$data,$conditon);
       }
       public function selectHomeAll($table){
           $sql = "SELECT * FROM $table ";
           return $this->db->select($sql);
       }
       public function selectHomeWithConditon($table,$conditon){
           $sql = "SELECT * FROM $table WHERE $conditon";
           return $this->db->select($sql);
       }
       
       public function SelectOrder($table,$sort,$limit = 12,$offset = 0){
        $sql = "SELECT * FROM $table ORDER BY $sort DESC LIMIT $offset,$limit" ;
        return $this->db->select($sql);
       }
       public function selectProductByBrand($table,$table2,$limit){
        $sql = "SELECT * FROM `$table` INNER JOIN `$table2` ON `$table`.`id_hieusp` = `$table2`.`idhieusp` ORDER BY `$table`.`idsanpham` DESC LIMIT $limit";
        return $this->db->select($sql);
    }

}
