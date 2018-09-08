  <h1>Create new Student</h1>

  <?php echo validation_errors(); ?>

    <?php 
      
        echo form_open('stud/add');
        echo form_label("Student Name");
        echo form_input(array("id"=>"name","name"=>"name"));
        echo "<br />";
        echo form_submit(array("id"=>"submit","value"=>"Add"));
        echo form_close();
       
    ?>