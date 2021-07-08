<?php

class productModel extends Dmodel{

    public function __construct()
    {
        parent::__construct();
    }
    public function selectProductByBrandName($table,$idsanpham){
        $sql = "SELECT * FROM $table WHERE idsanpham =:id";
        $data = [
            ':id'=>$idsanpham
        ];
        return $this->db->select($sql,$data);
    }
    public function insertProduct($news_table,$data){
        return $this->db->insert($news_table,$data);
       }
       public function updateProduct($news_table,$data,$conditon){
           return $this->db->update($news_table,$data,$conditon);
       }
       public function selectProductByAll($table,$table2,$table3){
           $sql = "SELECT * FROM `$table` INNER JOIN `$table2` ON `$table`.`id_hieusp` = `$table2`.`idhieusp`
           INNER JOIN `$table3` ON `$table`.`loaisp` = `$table3`.`idloaisp`
           ORDER BY `$table`.`idsanpham` DESC ";
           return $this->db->select($sql);
       }
       public function deleteProduct($table,$conditon){
           return $this->db->delete($table,$conditon);
       }
       public function selectProductById($table,$conditon = null){
           $sql = "SELECT * FROM $table WHERE $conditon";
           return $this->db->select($sql);
       }
       public function selectProductAll($table){
        $sql = "SELECT * FROM $table";
        return $this->db->select($sql);
         }
       public function SelectOrder($table,$sort,$limit = 12,$offset= 0){
        $sql = "SELECT * FROM $table ORDER BY $sort DESC LIMIT $offset,$limit";
        return $this->db->select($sql);
       }
       public function CountRow($table){
           $sql = "SELECT * FROM $table ";
           return $this->db->getNumbersRow($sql);
       }
       public function GetProductById($table,$table_product,$id){
           $sql = "SELECT * FROM `$table` INNER JOIN `$table_product` ON `$table`.`idloaisp` = `$table_product`.`loaisp` WHERE `$table_product`.`loaisp` = $id ORDER BY `$table_product`.`idsanpham` DESC";
            return $this->db->select($sql);
       }
       
       public function GetProductByIdPagination($table,$table_product,$id,$limit,$offset){
           $sql = "SELECT * FROM `$table` INNER JOIN `$table_product` ON `$table`.`idloaisp` = `$table_product`.`loaisp` WHERE `$table_product`.`loaisp` = $id ORDER BY `$table_product`.`idsanpham` DESC LIMIT $offset,$limit";
            return $this->db->select($sql);
       }
}
?>