<?php
class product extends basecontroller{
    public function __construct()
    {
        parent::__construct();
    }
    //user function 
    public  function index($pagination){
         //show product type 
        $table='loaisp';
        $header_getData = $this->loadModel('productModel');
        $data['header_data_array'] = $header_getData->selectProductAll($table);

        $table_brand = 'hieusp';
        // show product brands header
        $HomeBrands_getData = $this->loadModel('brandModel');
        $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);

        $this->loadView('header',$data);
         // show Product HomePage
         $table_product = 'sanpham';
         $product_getData = $this->loadModel('productModel');
         $number_row = $product_getData->CountRow($table_product);
        if(isset($pagination[0]) && isset($pagination[1])){
            $numberProductOnPage = $pagination[0];
            $currentPage  = $pagination[1];
        }
        if(!isset($pagination[1]) && !isset($pagination[0])||isset($pagination[1]) && !isset($pagination[0])||!isset($pagination[1]) && isset($pagination[0])){
            $currentPage = 1;
            $numberProductOnPage = 12;
        }
        $number_page = ceil($number_row /$numberProductOnPage);
        $data['number_page']  = [];
        array_push($data['number_page'], $number_page,$numberProductOnPage,$currentPage);
        $offset = ($currentPage - 1)*$numberProductOnPage;
        $data['Product_data'] = $product_getData->SelectOrder($table_product,'idsanpham',$numberProductOnPage,$offset);
        $this->loadView('productView',$data);
        $this->loadView('footer');
    }
    //show product by productType
    public function ProductType($id){
        $table='loaisp';
        $header_getData = $this->loadModel('productModel');
        $data['header_data_array'] = $header_getData->selectProductAll($table);

        $table_brand = 'hieusp';
        // show product brands header
        $HomeBrands_getData = $this->loadModel('brandModel');
        $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);

        $this->loadView('header',$data);
         // show Product HomePage
         $table_product = 'sanpham';
         $product_getData = $this->loadModel('productModel');
         $id   = $id[0];
         $data['numberRowOfTableById'] = $product_getData->GetProductById($table,$table_product,$id);
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

        $data['getData_byProduct_type'] = $product_getData->GetProductByIdPagination($table,$table_product,$id,$numberProductOnPage,$offset);
        $this->loadView('productViewbyCaretory',$data);
        $this->loadView('footer');
    }

    //admin function 
    public function add_Products(){
        session::checkLoginSession();
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $news_table = 'loaisp';
        $caretoryProduct = $this->loadModel('caretoryProductModel');
        $data['caretoryProduct'] = $caretoryProduct->selectcaretoryProductsByAll($news_table);
        $brandtable = 'hieusp';
        $brandProcess = $this->loadModel('brandModel');
        $array['brandProcess'] = $brandProcess->selectBrandByAll($brandtable);
        $this->loadViewAdmin('product/add_Product',$data,$array);
        $this->loadViewAdmin('footer');
    }
    public function insertProducts(){
        session::checkLoginSession();
        $ProductBrandCode = $_POST['idhieusp'];
        $ProductName = $_POST['tensp'];
        $ProCode = $_POST['masp'];
        $ProductImage = $_FILES['hinhanh']['name'];
        $ProductPrice = $_POST['giadexuat'];
        $ProductSalePrice = $_POST['giagiam'];
        $ProductSl = $_POST['soluong'];
        $ProductType = $_POST['idloaisp'];
        $ProStatus = $_POST['tinhtrang'];
        $ProContent = $_POST['noidung'];
        $news_table = 'sanpham';
        $tmp_name = $_FILES['hinhanh']['tmp_name'];
        $Img_Format = explode(".",$ProductImage);
        $img_filter = strtolower(end($Img_Format));
        $img_output = $Img_Format[0].time().".".$img_filter;
        $path_upload  = 'public/imgs/'.$img_output;
        $data  =[
           'id_hieusp'=>$ProductBrandCode,
           'tensp'=>$ProductName,
           'masp'=>$ProCode,
           'hinhanh'=>$img_output,
           'giadexuat'=>$ProductPrice,
           'giagiam'=>$ProductSalePrice,
           'giadexuat'=>$ProductPrice,
           'soluong'=>$ProductSl,
           'loaisp'=>$ProductType,
           'tinhtrang'=>$ProStatus,
           'noidung'=>$ProContent,

        ];
        $add_product = $this->loadModel('productModel');
        $result = $add_product->insertProduct($news_table,$data);
        if($result == 1){
            move_uploaded_file($tmp_name,$path_upload);
            header("Location:".BASE_URL."product/list_Products");
        }
    }
    public function selectProductById($id){
        //model process
      session::checkLoginSession();     


      $table = 'sanpham';
      $conditon = "idsanpham='$id[0]'";
      $list_Product = $this->loadModel('productModel');
      $data['list_ProductById'] = $list_Product->selectProductById($table,$conditon);

      $table_categoryproduct = 'loaisp';
      $caretoryProduct = $this->loadModel('caretoryProductModel');
      $array['caretoryProduct'] = $caretoryProduct->selectcaretoryProductsByAll($table_categoryproduct);
      $brandtable = 'hieusp';
      $brandProcess = $this->loadModel('brandModel');
      $arr['brandProcess'] = $brandProcess->selectBrandByAll($brandtable);

      //view process
      $this->loadViewAdmin('header');
      $this->loadViewAdmin('dashboardView');
      $this->loadViewAdmin('product/edit_ProductView',$data,$array,$arr);
      $this->loadViewAdmin('footer');
     }
     public function list_Products(){
        //model process
        session::checkLoginSession();
        $table ='sanpham';
        $table2='hieusp';
        $table3='loaisp';
        $list_Product = $this->loadModel('productModel');
        $data['list_Product'] = $list_Product->selectProductByAll($table,$table2,$table3);
        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('product/list_ProductView',$data);
        $this->loadViewAdmin('footer');
    }
    public function delete_Product($id){
        session::checkLoginSession();
        //model process
        $table = "sanpham";
        $conditon = "idsanpham='$id[0]'";
        $deletePro = $this->loadModel('productModel');
        $result = $deletePro->deleteProduct($table,$conditon);
        if($result == 1){
            header("Location:".BASE_URL."product/list_ProductView");
        }
      
    }
    public function update_ProductById($id){
        session::checkLoginSession();

        $ProductBrandCode = $_POST['idhieusp'];
        $ProductName = $_POST['tensp'];
        $ProCode = $_POST['masp'];
        $ProductImage = $_FILES['hinhanh']['name'];
        $ProductPrice = $_POST['giadexuat'];
        $ProductSalePrice = $_POST['giagiam'];
        $ProductSl = $_POST['soluong'];
        $ProductType = $_POST['idloaisp'];
        $ProStatus = $_POST['tinhtrang'];
        $ProContent = $_POST['noidung'];

        $news_table = 'sanpham';
        $tmp_name = $_FILES['hinhanh']['tmp_name'];
        $Img_Format = explode(".",$ProductImage);
        $img_filter = strtolower(end($Img_Format));
        $img_output = $Img_Format[0].time().".".$img_filter;
        $path_upload  = 'public/imgs/'.$img_output;

        $conditon = "idsanpham = '$id[0]'";
        if($ProductImage){            
            $list_Product = $this->loadModel('productModel');
            $data['list_ProductById'] = $list_Product->selectProductById($news_table,$conditon);

            foreach ($data as $key => $value) {
                if($value['hinhanh']){
                    unlink('public/imgs/'.$value['hinhanh']);
                }
            }

            $path_upload  = 'public/imgs/'.$img_output;

            $data  =[
                'id_hieusp'=>$ProductBrandCode,
                'tensp'=>$ProductName,
                'masp'=>$ProCode,
                'hinhanh'=>$img_output,
                'giadexuat'=>$ProductPrice,
                'giagiam'=>$ProductSalePrice,
                'giadexuat'=>$ProductPrice,
                'soluong'=>$ProductSl,
                'loaisp'=>$ProductType,
                'tinhtrang'=>$ProStatus,
                'noidung'=>$ProContent,
     
             ];

            move_uploaded_file($tmp_name,$path_upload);

        }
        else{
            $data  =[
                'id_hieusp'=>$ProductBrandCode,
                'tensp'=>$ProductName,
                'masp'=>$ProCode,
                'giadexuat'=>$ProductPrice,
                'giagiam'=>$ProductSalePrice,
                'giadexuat'=>$ProductPrice,
                'soluong'=>$ProductSl,
                'loaisp'=>$ProductType,
                'tinhtrang'=>$ProStatus,
                'noidung'=>$ProContent,
     
             ];

        }
        $updatePro = $this->loadModel('productModel');
        $reult1 = $updatePro->updateProduct($news_table,$data,$conditon);

        if($reult1==1){
            header("Location:".BASE_URL."product/list_Products");
        }
    }

}
?>