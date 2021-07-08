<?php 

class caretoryProduct extends basecontroller{

    public function __construct()
    {
        parent::__construct();
    }
    //admin funciton 
    public function add_caretoryProduct(){
        session::checkLoginSession();
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('caretoryProduct/add_CaretoryProduct');
        $this->loadViewAdmin('footer');
    }
    public function list_caretoryProduct(){
        session::checkLoginSession();
        //model process
        $table = 'loaisp';
        $list_caretoryProduct = $this->loadModel('caretoryProductModel');
        $data['lis_caretoryProduct'] = $list_caretoryProduct->selectcaretoryProductsByAll($table);
        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('caretoryProduct/list_CaretoryProductView',$data);
        $this->loadViewAdmin('footer');
    }
    public function insertcaretoryProduct(){
        session::checkLoginSession();
        $caretoryProductName = $_POST['tenloaisp'];
        $caretoryProductStatus = $_POST['tinhtrang'];
        $news_table = 'loaisp';
        $data  =[
           'tenloaisp'=>$caretoryProductName,
           'tinhtrang'=>$caretoryProductStatus
        ];
        $add_caretoryProduct = $this->loadModel('caretoryProductModel');
        $result = $add_caretoryProduct->insertcaretoryProducts($news_table,$data);
        header("Location:".BASE_URL."caretoryProduct/list_caretoryProduct");
    }
    public function deletecaretoryProduct($id){
        session::checkLoginSession();
        $table = 'loaisp';
        $conditon = "idloaisp='$id[0]'";
        $deletecaretoryProduct = $this->loadModel('caretoryProductModel');
        $result = $deletecaretoryProduct->deletecaretoryProduct($table,$conditon);
        header("Location:".BASE_URL."caretoryProduct/list_caretoryProduct");
    }
    public function selectcaretoryProductById($id){
        //model process
      session::checkLoginSession();
      $table = 'loaisp';
      $conditon = "idloaisp='$id[0]'";
      $list_caretoryProduct = $this->loadModel('caretoryProductModel');
        $data['lis_caretoryProduct'] = $list_caretoryProduct->selectcaretoryProductById($table,$conditon);
      $this->loadViewAdmin('header');
      $this->loadViewAdmin('dashboardView');
      $this->loadViewAdmin('caretoryProduct/edit_CaretoryProductView',$data);
      $this->loadViewAdmin('footer');
     }
     public function updatecaretoryProductsById($id){
        session::checkLoginSession();
        $news_table = "loaisp";
        $conditon = "idloaisp='$id[0]'";
        $updatecaretoryProduct  = $this->loadModel('caretoryProductModel');
        $caretoryProductName = $_POST['tenloaisp'];
        $caretoryProductStatus = $_POST['tinhtrang'];
        $data  =[
            'tenloaisp'=>$caretoryProductName,
            'tinhtrang'=>$caretoryProductStatus
         ];
        $result= $updatecaretoryProduct->updatecaretoryProducts($news_table,$data,$conditon);
        header("Location:".BASE_URL."caretoryProduct/list_caretoryProduct");
    }
}


?>