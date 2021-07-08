<?php 

class brands extends basecontroller{

    public function __construct()
    {
        parent::__construct();
    }
    public function index($id){
         //show product type 
        $table='loaisp';
        $header_getData = $this->loadModel('homeModel');
        $data['header_data_array'] = $header_getData->selectHomeAll($table);

         $table_brand = 'hieusp';
         // show product brands header
         $HomeBrands_getData = $this->loadModel('brandModel');
         $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);
        $this->loadView('header',$data); 
        $table_product = 'sanpham';
         $product_getData = $this->loadModel('productModel');
         $id   = $id[0];
         $data['numberRowOfTableById'] = $HomeBrands_getData->GetProductById($table_brand,$table_product,$id);
         $i = 0;
         foreach($data['numberRowOfTableById'] as $key => $value){
             ++$i;
         }
         $number_row = $i;
        if(isset($id[1]) && isset($id[2])){
            $numberProductOnPage = $id[1];
            $currentPage  = $id[2];
        }
        if(!isset($id[2]) && !isset($id[1])||isset($id[2]) && !isset($id[1])||!isset($id[2]) && isset($id[1])){
            $currentPage = 1;
            $numberProductOnPage = 12;
        }
        $number_page = ceil($number_row /$numberProductOnPage);
        $data['number_page']  = [];
        array_push($data['number_page'], $number_page,$numberProductOnPage,$currentPage);
        $offset = ($currentPage - 1)*$numberProductOnPage;
        $data['getData_byProduct_type'] = $HomeBrands_getData->GetProductByIdPagination($table_brand,$table_product,$id,$numberProductOnPage,$offset);
        $this->loadView('productViewbyBrand',$data);
        $this->loadView('footer');
    }

    //admin function 
    public function add_Brands(){
        session::checkLoginSession();
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('brand/add_Brands');
        $this->loadViewAdmin('footer');
    }
    public function insertBrands(){
        session::checkLoginSession();
        $brandName = $_POST['tenhieusp'];
        $brandStatus = $_POST['tinhtrang'];
        $news_table = 'hieusp';
        $data  =[
           'tenhieusp'=>$brandName,
           'tinhtrang'=>$brandStatus
        ];
        $add_Brands = $this->loadModel('brandModel');
        $result = $add_Brands->insertBrand($news_table,$data);
        header("Location:".BASE_URL."brands/list_Brands");
    }
    public function list_Brands(){
        //model process
        session::checkLoginSession();
        $table = 'hieusp';
        $list_Brands = $this->loadModel('brandModel');
        $data['list_Brands'] = $list_Brands->selectBrandByAll($table);
        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('brand/list_BrandsView',$data);
        $this->loadViewAdmin('footer');
    }
    public function delete_Brands($id){
        session::checkLoginSession();
        //model process
        $table = "hieusp";
        $conditon = "idhieusp='$id[0]'";
        $deleteBrands = $this->loadModel('brandModel');
         $reult1 = $deleteBrands->deleteBrand($table,$conditon);
         header("Location:".BASE_URL."brands/list_Brands");
    }
    public function selectBrandsById($id){
        //model process
      session::checkLoginSession();
      $table = 'hieusp';
      $conditon = "idhieusp = '$id[0]'";
      $list_Brands = $this->loadModel('brandModel');
      $data['list_Brands'] = $list_Brands->selectBrandById($table,$conditon);
      //view process
      $this->loadViewAdmin('header');
      $this->loadViewAdmin('dashboardView');
      $this->loadViewAdmin('brand/editBrandView',$data);
      $this->loadViewAdmin('footer');
     }
     public function update_BrandsById($id){
        session::checkLoginSession();
        $table = "hieusp";
        $conditon = "idhieusp = '$id[0]'";
        $updateNew = $this->loadModel('brandModel');
        $brandName = $_POST['tenhieusp'];
        $brandStatus = $_POST['tinhtrang'];
        $data  =[
            'tenhieusp'=>$brandName,
            'tinhtrang'=>$brandStatus
         ];
        $reult1 = $updateNew->updateBrand($table,$data,$conditon);
        if($reult1==1){
            header("Location:".BASE_URL."brands/list_Brands?mess=update success!");
        }
        else{
            echo "Cap nhat that bai";
        }
    }
}

?>