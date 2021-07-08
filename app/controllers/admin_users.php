<?php
class admin_users extends basecontroller{
    public function __construct()
    {
        parent::__construct();
    }
    //admin
    public function list_Users(){

        //model process
        session::checkLoginSession();
        $table = 'users';
        $list_users= $this->loadModel('admin_usersModel');
        $data['list_News'] = $list_users->selectUsersAll($table);

        //view process
        $this->loadViewAdmin('header');
        $this->loadViewAdmin('dashboardView');
        $this->loadViewAdmin('users/list_usersView',$data);
        $this->loadViewAdmin('footer');
    }
}
?>