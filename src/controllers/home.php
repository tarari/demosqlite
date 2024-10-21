<?php 
    //controlador home
    
    require MODS.'/home.php';
    
    $books=query($db,"SELECT * FROM books");
  

    require VIEWS.'/home.view.php';
