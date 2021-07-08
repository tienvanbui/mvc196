<?php
class brandModel extends Dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertBrand($news_table,$data){
     return $this->db->insert($news_table,$data);
    }
    public function updateBrand($news_table,$data,$conditon){
        return $this->db->update($news_table,$data,$conditon);
    }
    public function selectBrandByAll($table){
        $sql = "SELECT * FROM $table ORDER BY 'idhieusp' DESC ";
        return $this->db->select($sql);
    }
    public function deleteBrand($table,$conditon){
        return $this->db->delete($table,$conditon);
    }
    public function selectBrandById($table,$conditon){
        $sql = "SELECT * FROM $table WHERE $conditon";
        return $this->db->select($sql);
    }
     public function GetProductByIdPagination($table,$table_product,$id,$limit,$offset){
        $sql = "SELECT * FROM `$table` INNER JOIN `$table_product` ON `$table`.`idhieusp` = `$table_product`.`id_hieusp` WHERE `$table_product`.`id_hieusp` = $id ORDER BY `$table_product`.`idsanpham` DESC LIMIT $offset,$limit";
        return $this->db->select($sql);
    }
    public function GetProductById($table,$table_product,$id){
           $sql = "SELECT * FROM `$table` INNER JOIN `$table_product` ON `$table`.`idhieusp` = `$table_product`.`id_hieusp` WHERE `$table_product`.`id_hieusp` = $id ORDER BY `$table_product`.`idsanpham` DESC";
            return $this->db->select($sql);
       }
}
?>