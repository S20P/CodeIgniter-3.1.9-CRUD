<?php

class Test extends CI_Controller{

    public function index(){
        echo "Hello Test Work";
      
    }

    public function hello(){
        echo "this is the hello method<br />";
         $this->load->model('User_model');
         $this->User_model->m1();
    }

    public function page(){
        $this->load->view('test');
    }

}

?>