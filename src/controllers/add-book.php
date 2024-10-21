<?php 
   
   
    if(!empty($_POST) 
        && !empty($_POST['title']) 
        && !empty($_POST['author']) 
        && !empty($_POST['year']))
        {
            $title=filter_input(INPUT_POST,'title');
            $author=filter_input(INPUT_POST,'author');
            $year=filter_input(INPUT_POST,'year');
        
        //conectar a BBDD
       // $db=connectMysql($dsn,$dbuser,$dbpassword);
        
        if(insert($db,'books',[
            'title'=>$title,
            'author'=>$author,
            'year'=>$year,
            ])){
            //volver a home
            header('Location:home');
        }else{
             header('Location:add');
        }
       
        
    }
    else{
        header('Location:add');
    }