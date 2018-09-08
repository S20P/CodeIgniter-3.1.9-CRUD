<?php 

class Stud_Model extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function create_student($data){
              return $this->db->insert("stud",$data);

    }
    
    public function update_student($data,$id){
        $this->db->set($data);
        $this->db->where("id",$id);
        $this->db->update("stud",$data);
        return true;
}

public function delete_student($id){
      return $this->db->delete("stud","id = ".$id);
}


}
 
?>
