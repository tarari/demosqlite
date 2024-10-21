<?php
   
    //constantes
    define('VIEWS',__DIR__.'/src/views');
    define('CONTR',__DIR__.'/src/controllers');
    define('MODS',__DIR__.'/src/models');
    // DSN
    require 'src/env.php';
    loadEnv('.env');

    //$dbhost=$_ENV['DB_HOST'];
    $dbname=$_ENV['DB_NAME'];
    //$dbuser=$_ENV['DB_USER'];
    //$dbpassword=$_ENV['DB_PASSWORD'];

    //$dsn='mysql:host='.$dbhost.';dbname='.$dbname;
   
    //routes

    $routes=[
        'home',
        'add',
        'admin',
        'add-book',
        'delete',
        'edit',
        'update-book',

    ];