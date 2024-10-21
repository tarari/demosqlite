<?php 
   
    if(!empty($_POST['title']) 
        || !empty($_POST['author'])
        || !empty($_POST['year'])){
            $title=filter_input(INPUT_POST,'title');
            $author=filter_input(INPUT_POST,'author');
            $year=filter_input(INPUT_POST,'year');
            $id=filter_input(INPUT_GET,'id');
            //$db=connectMysql($dsn,$dbuser,$dbpassword);
            if(update($db,'books',$id,[
                'title'=>$title,
                'author'=>$author,
                'year'=>$year
            ])){
                header('Location:admin');
            }else{
                header('Location:edit?id='.$id);
            }
    }