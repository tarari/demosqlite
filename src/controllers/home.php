<?php 
    //controlador home
    
    require MODS.'/home.php';
    $db=connectMysql($dsn,$dbuser,$dbpassword);
    $books=query($db,"SELECT * FROM books");
  

    require VIEWS.'/home.view.php';
