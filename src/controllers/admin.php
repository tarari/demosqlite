<?php
    require MODS.'/admin.php';
    $db=connectMysql($dsn,$dbuser,$dbpassword);
    $books=query($db,"SELECT * FROM books");
    require VIEWS.'/admin.view.php';