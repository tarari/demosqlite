<?php 
    
    function connectSqlite($dbname){
        try{
            $db=new PDO('sqlite:'.__DIR__.'/database/'.$dbname);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        }catch(PDOEXception $e){
            die($e->getMessage());
        }
        return $db;
    }

    function connectMysql($dsn,$dbuser,$dbpassword){
        try{
            $db=new PDO($dsn,$dbuser,$dbpassword);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
        return $db;
    }
