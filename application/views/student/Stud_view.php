
    
     <a href="<?php echo base_url();?>stud/add_view">add</a>
    
        <table border="1">
           <tr>
               <td>ID</td>
               <td>Student Name</td>
               <td>Edit</td>
               <td>Delete</td>
           </tr>

            <?php
            
               foreach($records as $r){
                   echo "<tr>";
                   echo "<td>".$r->id."</td>";
                   echo "<td>".$r->name."</td>";
                   echo "<td><a href='".base_url()."stud/edit/".$r->id."'>Edit</a></td>";
                   echo "<td><a href='".base_url()."stud/delete/".$r->id."'>Delete</a></td>";
                   echo "</tr>";
               }
            
            ?>
            
        </table>
 