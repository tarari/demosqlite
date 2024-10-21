<?php
    require 'src/env.php';
    loadEnv('.env');
    define('DB_DIR',__DIR__.'/src/db');
    if(!chdir(DB_DIR)){
        if (!mkdir(DB_DIR, 0777, true)) {
            die('Failed to create directory...');
        }       
    }
    
    $filename=DB_DIR.'/'.$_ENV['DB_NAME'];
    if (touch($filename)) {
        $db=new PDO('sqlite:'.$filename);
        
        $sql=file_get_contents(__DIR__.'/demo.session.sql');
        $db->exec($sql);
    }