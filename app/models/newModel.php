<?php
class newModel extends Dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertNew($news_table,$data){
     return $this->db->insert($news_table,$data);
    }
    public function updateNew($news_table,$data,$conditon){
        return $this->db->update($news_table,$data,$conditon);
    }
    public function selectNewByAll($table){
        $sql = "SELECT * FROM $table ORDER BY idtintuc DESC ";
        return $this->db->select($sql);
    }
    public function deleteNew($table,$conditon){
        return $this->db->delete($table,$conditon);
    }
    public function selectNewById($table,$conditon){
        $sql = "SELECT * FROM $table WHERE $conditon";
        return $this->db->select($sql);
    }
}
?>