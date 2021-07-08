<?php

class basecontroller
{
    public $session = null;
    public $input = null;
    public function __construct()
    {
        $this->session = new session;
        $this->input = new input;
    }
    protected function loadView($view,$data=[])
    {   
        extract($data);
        require_once "./app/views/$view.php";
    }
    protected function loadViewAdmin($viewAdmin,$data=[],$arr=[],$array=[])
    {   
        extract($data);
        extract($arr);
        extract($array);
        require_once "./app/views/adminViews/$viewAdmin.php";
    }
    protected function loadModel($modelName)
    {
        require_once "./app/models/$modelName.php";
        return new $modelName;
    }
}
