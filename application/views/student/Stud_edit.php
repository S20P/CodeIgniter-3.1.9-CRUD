<h1>Update Student</h1>


<?php echo validation_errors(); ?>
  
  <?php 
    
      echo form_open('stud/edit');
      echo form_hidden("old_id",$old_id);
      echo form_label("Student Name");
      echo form_input(array("id"=>"name","name"=>"name","value"=>$records[0]->name));
      echo "<br />";
      echo form_submit(array("id"=>"submit","value"=>"Edit"));
      echo form_close();
     
  ?>