<?php
    
    require 'config.php';
    $url=parse_url($_SERVER['REQUEST_URI']);
    $path=$url['path'];
    $query=$url['query'];
    $array_path=explode('/',$path);
    var_dump($array_path,$query);
    die;
    function router($url){
        $rutas=['add','delete','show'];
        if(in_array($url,$rutas)){
            return $url;
        }
    }
    $contr=router($url);
    require __DIR__.'/src/controllers/'.$contr.'.php';
    //front controller
  //  require VIEWS.'/index.view.php';