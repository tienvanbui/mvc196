<?php
class caretoryProductModel extends Dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertcaretoryProducts($news_table,$data){
     return $this->db->insert($news_table,$data);
    }
    public function updatecaretoryProducts($news_table,$data,$conditon){
        return $this->db->update($news_table,$data,$conditon);
    }
    public function selectcaretoryProductsByAll($table){
        $sql = "SELECT * FROM $table ORDER BY idloaisp DESC ";
        return $this->db->select($sql);
    }
    public function deletecaretoryProduct($table,$conditon){
        return $this->db->delete($table,$conditon);
    }
    public function selectcaretoryProductById($table,$conditon){
        $sql = "SELECT * FROM $table WHERE $conditon";
        return $this->db->select($sql);
    }
}
?>