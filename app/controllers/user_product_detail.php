<?php 

class user_product_detail extends basecontroller{

    public function index(){
        $table='loaisp';
        $header_getData = $this->loadModel('homeModel');
        $data['header_data_array'] = $header_getData->selectHomeAll($table);

        $table_brand = 'hieusp';
        // show product brands header
        $HomeBrands_getData = $this->loadModel('brandModel');
        $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);

        
        $this->loadView('header',$data);
        $this->loadView('product_detail');
        $this->loadView('footer');
    }
}
?>