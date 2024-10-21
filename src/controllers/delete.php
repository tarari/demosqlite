<?php
   $id=filter_input(INPUT_GET,'id');
   //$db=connectMysql($dsn,$dbuser,$dbpassword);
   if(delete($db,'books',$id)){
     header('Location:admin');
   }
     else{
          $_SESSION['error']='Error deleting record';
     }