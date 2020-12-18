<?php
  
        if (isset($_POST['save'])) {
          $post = $_POST['post'];
          $img = $_FILES['image']['name'];
          $Folder = "picture/".$img;
          $ftype=$_FILES['image']['type'];
          $type=array("image/jpg","image/png","image/jpeg","image/webp");
            $insert = "insert into post values ( 'NULL' ,  '$post' , '$Folder' )";

               $f=0;
               for($a=0;$a<4;$a++)
               {
               if($type[$a]==$ftype)
               {
                if(mysqli_query($connection, $insert)){
               $f=1;

               
               move_uploaded_file($_FILES['image']['tmp_name'], $Folder);
               break;
               }
             }
               }
               if($f==0)
                 {
                 echo "Invalid File type.<br/>";
                 echo "Your file Type is ".$img;
               }  
            }
      //header("Location: ../Login/soori.php");
      
			
?>