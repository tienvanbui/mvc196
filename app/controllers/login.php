<?php 
class login extends basecontroller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        //show product type 
        $table='loaisp';
        $header_getData = $this->loadModel('homeModel');
        $data['header_data_array'] = $header_getData->selectHomeAll($table);
        $table_brand = 'hieusp';
        // show product brands header
        $HomeBrands_getData = $this->loadModel('brandModel');
        $data['HomeBrands_array'] = $HomeBrands_getData->selectBrandByAll($table_brand);
        $this->loadView('header',$data);
        $this->loadViewAdmin('loginView');
        $this->loadView('footer');
    }
    public function dashboard(){
        session::checkLoginSession();
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('footer');
    }
    public function checkLogin(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $loginCheck  = $this->loadModel('loginModel');
        
        $table_adminLofin = 'admin';
        $checked = $loginCheck->logIn($table_adminLofin,$username,$password);
       if($checked == 0){
            $message['login_status'] = "Your username or password is not correct.Please try again!";
            header("Location:".LOGIN_URL_DEFAULT);
       }
       else{
           $resultAfterLogin = $loginCheck->getLogIn($table_adminLofin,$username,$password);
           session::set('login',true);
           session::set('username',$resultAfterLogin[0]['username']);
           session::set('password',$resultAfterLogin[0]['password']);
           header("Location:".BASE_URL."login/dashboard");
       }
    }
    public function logOut(){
        session::destroySession();
        header("Location:".LOGIN_URL_DEFAULT);
    }
}

?>