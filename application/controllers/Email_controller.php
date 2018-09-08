<?php

class Email_controller extends CI_Controller{

   public  function __construct()
   {
       parent::__construct();
       $this->load->library('session');
       $this->load->helper('form');
   }

     public function index(){
         // echo "using email";
         
         $this->load->view('templates/header');
         $this->load->view("email/email_form");
         $this->load->view('templates/footer');

         $newdata = array( 
            'username'  => 'johndoe', 
            'email'     => 'johndoe@some-site.com', 
            'logged_in' => TRUE
         );  
         
         $this->session->set_userdata($newdata);
       //  $this->session->unset_userdata($newdata);

     }

     public function send_mail(){
        // $this->load->library('email');

        $from_email = "satish6073@gmail.com";
      //  $to_email = "profwork.sp18@gmail.com";
        $to_email = $this->input->post('email');



       //Load Email library
       $this->load->library('email');
       $this->email->from($from_email,"S.H.PARMAR");
       $this->email->to($to_email);
       $this->email->subject("Email Test");
       $this->email->message('Testing the email class.');
        //Send mail 

         if($this->email->send()){
            $this->session->set_flashdata("email_sent","Email sent successfully.");
         }
         else{
            $this->session->set_flashdata("email_sent","Error in sending Email."); 
            $this->load->view('templates/header');
            $this->load->view("email/email_form");
            $this->load->view('templates/footer');
         }


     }
}

?>