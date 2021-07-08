<?php
class admin_slider extends basecontroller{
    public function __construct()
    {
        parent::__construct();
    }
    //admin
    public function add_Sliders(){

        session::checkLoginSession();
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('sliders/add_slider');
        $this->loadViewAdmin('footer');
    }
    public function insertSlider(){
        session::checkLoginSession();
        $SliderImg =  $_FILES["hinhanh"]['name'];
        $news_table = 'slider';

        $Img_Format = explode(".",$SliderImg);
        $img_filter = strtolower(end($Img_Format));
        $img_output = $Img_Format[0].time().".".$img_filter;
        $path_upload  = 'public/imgs/'.$img_output;

        $data  = [
            'hinhanh'=>$img_output,
        ];

        $add_sli = $this->loadModel('sliderModel');
        $reult2 = $add_sli->insertSlider($news_table,$data);

        if($reult2==1){
            move_uploaded_file($_FILES['hinhanh']["tmp_name"],$path_upload);
            header("Location:".BASE_URL."admin_slider/list_Slider?mess=Success");
        }
    }
    public function list_Slider(){

        //model process
        session::checkLoginSession();
        $table = 'slider';
        $list_sli = $this->loadModel('sliderModel');
        $data['list_News'] = $list_sli->selectSliderByAll($table);

        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('sliders/list_sliderView',$data);
        $this->loadViewAdmin('footer');
    }
    public function delete_Slider($id){
        //model process
        session::checkLoginSession();
        $table = "slider";
        $conditon = "id='$id[0]'";
        $deleteSli = $this->loadModel('sliderModel');
        $reult1 = $deleteSli->deleteSlider($table,$conditon);
        if($reult1 == 1){
            header("Location:".BASE_URL."admin_slider/list_Slider");
        }
        
    }
    public function selectNewsById($id){

        //model process
        session::checkLoginSession();
        $table = 'slider';
        $conditon = "id = '$id[0]'";
        $list_Sli = $this->loadModel('sliderModel');
        $data['list_NewsById'] = $list_Sli->selectSliderWithConditon($table,$conditon);

        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('sliders/editslider',$data);
        $this->loadViewAdmin('footer');
    }
    public function update_SliderById($id){
        session::checkLoginSession();

        $newImg =  $_FILES["hinhanh"]['name'];
        $tmp_img =  $_FILES["hinhanh"]['tmp_name'];

        $Img_Format = explode(".",$newImg);
        $img_filter = strtolower(end($Img_Format));
        $img_output = $Img_Format[0].time().".".$img_filter;


        $conditon = "id = '$id[0]'";
        $table = "slider";

        if($newImg){            
            $list_News = $this->loadModel('sliderModel');
            $data['list_NewsById'] = $list_News->selectSliderWithConditon($table,$conditon);

            foreach ($data as $key => $value) {
                if($value['hinhanh']){
                    unlink('public/imgs/'.$value['hinhanh']);
                }
            }

            $path_upload  = 'public/imgs/'.$img_output;

            $data  = [
                'hinhanh'=>$img_output,
            ];

            move_uploaded_file($tmp_img,$path_upload);

        }
        else{
            $data  = [
            ];

        }
        $updateNew = $this->loadModel('sliderModel');
        $reult1 = $updateNew->updateSlider($table,$data,$conditon);

        if($reult1==1){
            header("Location:".BASE_URL."admin_slider/list_Slider");
        }
    }
}




?>