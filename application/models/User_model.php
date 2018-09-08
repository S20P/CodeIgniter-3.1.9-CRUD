<?php
class User_model extends CI_Model{

  public function __construct(){
      parent::__construct();     
       }

  public function m1(){
      echo "M1 is the Model Method";
      $this->load->helper('url');
  }

}

?>