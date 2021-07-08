<?php 

class  cart extends basecontroller{

    public function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $table='loaisp';
        $header_getData = $this->loadModel('homeModel');
        $data['header_data_array'] = $header_getData->selectHomeAll($table);

        $table_brand = 'hieusp';
        // show product brands header
        $HomeBrands_getData = $this->loadModel('brandModel');
        $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);
        $this->loadView('header',$data);
        $this->loadView('cartView');
        $this->loadView('footer');
    }
    
}

?>