<?php

class Stud_controller extends CI_Controller{

            public function index(){
                // echo "hello Student Section";
                $query = $this->db->get("stud");
                $data['records'] = $query->result(); 
                $this->load->view('templates/header');
                $this->load->view("student/Stud_view",$data);
                $this->load->view('templates/footer');


        //  $this->load->library("mylibrary");
         // $this->mylibrary->some_function();


                
            }
          
            public function add_student_view(){
                 //echo "view new Student";
                //  $this->load->helper('form');
                 $this->load->view('templates/header');
                 $this->load->view("student/Stud_add");
                 $this->load->view('templates/footer');
            }

            public function add_student(){
                //  $this->load->model("Stud_Model");
                // $this->load->library("form_validation");
                  $this->form_validation->set_rules("name","Name","required");
                  $name = $this->input->post("name");
                  $data = array("name"=>$name);
             

                 if($this->form_validation->run()===FALSE){
                    $this->load->view('templates/header');
                    $this->load->view("student/Stud_add");
                    $this->load->view('templates/footer'); 
                 }
                 else{
                    $this->Stud_Model->create_student($data);
                    $this->index();
                 }
                 
             }
             public function update_student_view(){
               $id = $this->uri->segment('3');
               $query =$this->db->get_where("stud",array("id"=>$id));
               $data['records'] = $query->result();
               $data['old_id'] = $id;
                $this->load->view('templates/header');
                $this->load->view("student/Stud_edit",$data);
                $this->load->view('templates/footer'); 
             }


             public function update_student(){
                 
             //    $this->load->model("Stud_Model");
                 $this->form_validation->set_rules("name","Name","required");

                  $name = $this->input->post("name");
                  $old_id = $this->input->post("old_id");

                 $data = array("name"=>$name);
                 if(!$this->form_validation->run()===FALSE){
                    $this->Stud_Model->update_student($data,$old_id);
                    $this->index();
                 }
                 
            }

            public function delete_student(){
               // $this->load->model("Stud_Model");
               $id = $this->uri->segment('3');
               $this->Stud_Model->delete_student($id);
               $this->index();
            }



          
}
 
?>