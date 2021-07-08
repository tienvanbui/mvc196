<?php
class home extends basecontroller{
        public function index(){
            //Model Process
            //show product type 
            $table='loaisp';
            $header_getData = $this->loadModel('homeModel');
            $data['header_data_array'] = $header_getData->selectHomeAll($table);
            // show Product HomePage
            $table_product = 'sanpham';
            $productHome_getData = $this->loadModel('homeModel');
            $data['homeProduct_data'] = $productHome_getData->SelectOrder($table_product,'idsanpham');
            //
            $table_brand = 'hieusp';
            // show product brands header
            $HomeBrands_getData = $this->loadModel('brandModel');
            $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);
            
            $data['TopProductBrandHome_data'] = $productHome_getData->selectProductByBrand($table_product,$table_brand,intval(4));
            //  show slider
            $table_slider = 'slider';
            $ImgSlider = $this->loadModel('sliderModel');
            $data['Slider_Img_Data_get'] = $ImgSlider->SelectOrder($table_slider,'id');
            
            //View Process
            $this->loadView('header',$data);
            $this->loadView('slider',$data);
            $this->loadView('homeview',$data);
            $this->loadView('footer');
        }
    }
?>