Welcome 
<?php echo $this->session->userdata('name'); ?> 
      <br> 
      <a href = "<?php echo  base_url()?>/sessionex/unset">
         Click Here</a> to unset session data. 