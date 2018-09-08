<?php
class  News_model extends CI_Model{
    public function  __construct(){
         $this->load->database();
    }

 public function get_news($slug=FALSE){
     if($slug===FALSE){
          $query = $this->db->get('news');
           return $query->result_array();
     }else{
          $query = $this->db->get_where('news',array('slug'=>$slug));
          return $query->row_array();
     }
 }


 public function set_news(){

     $this->load->helper('url');

     $slug = url_title($this->input->post('title'),'dash',TRUE);

     $data = array(
         'title'=>$this->input->post('title'),
         'slug'=>$slug,
         'text'=>$this->input->post('text')
     );

     return $this->db->insert('news',$data);

    // $this->db->insert("stud",$data);
    // $this->db->set($data);
    // $this->db->where("id",1);
    // $this->db->update("stud",$data); 
    // $this->db->delete("stud","id=1");
    // $query = $this->db->get("stud");
    // $data['records'] = $query->result();
    // $this->db->close();
 }

}
?>