<?php 
         echo $this->session->flashdata('email_sent'); 
         echo form_open('mail/send'); 
      ?> 
		
      <input type = "email" name = "email" required /> 
      <input type = "submit" value = "SEND MAIL"> 
		
      <?php 
         echo form_close(); 
      ?> 