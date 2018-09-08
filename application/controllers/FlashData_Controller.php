<?php

class FlashData_Controller extends CI_Controller
{
    public function index()
    {
        //$this->load->library('session');
         $this->load->view('templates/header');
         $this->load->view('flash/flashdata_home');
         $this->load->view('templates/footer');

    }

    public function add()
    {
        //$this->load->library('session');
       // $this->load->helper('url');
        $this->session->set_flashdata("item", "SATISH");
        redirect('flashdata');
    }
}
