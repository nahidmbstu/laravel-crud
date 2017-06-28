<html>
   
   <head>
      <title>task Edit</title>
   </head>
   
   <body>
      <form action = "" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td> task Name</td>
               <td>
                  <input type = 'text' name = 'task_name' 
                     value = '<?php echo$users[0]->task_name; ?>'/>
               </td>
            </tr>
            <tr>
               <td>task details</td>
               <td>
                  <!-- <input type = 'text' name = 'task_detail' 
                     value = ''/> -->

                     <textarea name = 'task_detail' rows="5" cols="40"><?php echo$users[0]->task_detail; ?></textarea>
               </td>
            </tr>
            
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update task" />
               </td>
            </tr>
         </table>
      
      </form>
   
   </body>
</html>