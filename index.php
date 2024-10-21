<?php
    require 'helper.php';
    require 'config.php';
   
    require 'src/database.php';
   
    $db=connectSqlite($dbname);
    
    $controller=router($routes);
    
    require CONTR.'/'.$controller.'.php';

   
    