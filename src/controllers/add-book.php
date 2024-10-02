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
        $db=connectMysql($dsn,$dbuser,$dbpassword);
        
        //insertar
        $stmt=$db->prepare(
            "INSERT INTO books(title,author,year) VALUES(?,?,?)");
            //$stmt->bindParam(':title',$title);
           
        if($stmt->execute([$title,$author,$year])){
            //volver a home
            header('Location:home');
        }else{
             header('Location:add');
        }
       
        
    }
    else{
        header('Location:add');
    }