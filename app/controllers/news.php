<?php
class news extends basecontroller{
    public function __construct()
    {
        parent::__construct();
    }
    //user 
    public function index(){
        $table='loaisp';
        $header_getData = $this->loadModel('homeModel');
        $data['header_data_array'] = $header_getData->selectHomeAll($table);

        $table_brand = 'hieusp';
        // show product brands header
        $HomeBrands_getData = $this->loadModel('brandModel');
        $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);

        $new_table = 'tintuc';
        $new_array_data = $this->loadModel('newModel');
        $data['New_array_data'] = $new_array_data->selectNewByAll($new_table);
        $this->loadView('header',$data);
        $this->loadView('newsView',$data);
        $this->loadView('footer');
    }
    //admin
    public function add_News(){

        session::checkLoginSession();
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('new/add_news');
        $this->loadViewAdmin('footer');
    }
    public function insertNews(){
        session::checkLoginSession();
        $newName = $_POST['tentintuc'];
        $newCode = $_POST['matin'];
        $newImg =  $_FILES["hinhanh"]['name'];
       
        $newCont = $_POST['noidung'];
        $newStatus = $_POST['tinhtrang'];

        $news_table = 'tintuc';

        $Img_Format = explode(".",$newImg);
        $img_filter = strtolower(end($Img_Format));
        $img_output = $Img_Format[0].time().".".$img_filter;
        $path_upload  = 'public/imgs/'.$img_output;

        $data  = [
            'tentintuc'=>$newName,
            'matin'=>$newCode,
            'hinhanh'=>$img_output,
            'noidung'=>$newCont,
            'tinhtrang'=>$newStatus
        ];

        $add_News = $this->loadModel('newModel');
        $reult2 = $add_News->insertNew($news_table,$data);

        if($reult2==1){
            move_uploaded_file($_FILES['hinhanh']["tmp_name"],$path_upload);
            header("Location:".BASE_URL."news/list_News?mess=Success");
        }
    }
    public function list_News(){

        //model process
        session::checkLoginSession();
        $table = 'tintuc';
        $list_News = $this->loadModel('newModel');
        $data['list_News'] = $list_News->selectNewByAll($table);

        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('new/list_NewsView',$data);
        $this->loadViewAdmin('footer');
    }
    public function delete_News($id){
        //model process
        session::checkLoginSession();
        $table = "tintuc";
        $conditon = "idtintuc='$id[0]'";
        $deleteNews = $this->loadModel('newModel');
        $reult1 = $deleteNews->deleteNew($table,$conditon);
        header("Location:".BASE_URL."news/list_News");
    }
    public function selectNewsById($id){

        //model process
        session::checkLoginSession();
        $table = 'tintuc';
        $conditon = "idtintuc = '$id[0]'";
        $list_News = $this->loadModel('newModel');
        $data['list_NewsById'] = $list_News->selectNewById($table,$conditon);

        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('new/editViews',$data);
        $this->loadViewAdmin('footer');
    }
    public function update_NewsById($id){
        session::checkLoginSession();

        $newName = $_POST['tentintuc'];
        $newCode = $_POST['matin'];
        $newCont = $_POST['noidung'];
        $newStatus = $_POST['tinhtrang'];

        $newImg =  $_FILES["hinhanh"]['name'];
        $tmp_img =  $_FILES["hinhanh"]['tmp_name'];

        $Img_Format = explode(".",$newImg);
        $img_filter = strtolower(end($Img_Format));
        $img_output = $Img_Format[0].time().".".$img_filter;


        $conditon = "idtintuc = '$id[0]'";
        $table = "tintuc";

        if($newImg){            
            $list_News = $this->loadModel('newModel');
            $data['list_NewsById'] = $list_News->selectNewById($table,$conditon);

            foreach ($data as $key => $value) {
                if($value['hinhanh']){
                    unlink('public/imgs/'.$value['hinhanh']);
                }
            }

            $path_upload  = 'public/imgs/'.$img_output;

            $data  = [
                'tentintuc'=>$newName,
                'matin'=>$newCode,
                'hinhanh'=>$img_output,
                'noidung'=>$newCont,
                'tinhtrang'=>$newStatus
            ];

            move_uploaded_file($tmp_img,$path_upload);

        }
        else{
            $data  = [
                'tentintuc'=>$newName,
                'matin'=>$newCode,
                'noidung'=>$newCont,
                'tinhtrang'=>$newStatus
            ];

        }
        $updateNew = $this->loadModel('newModel');
        $reult1 = $updateNew->updateNew($table,$data,$conditon);

        if($reult1==1){
            header("Location:".BASE_URL."news/list_News");
        }
    }
}




?>