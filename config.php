<?php

spl_autoload_register(function($class_name){
    
    //$class_name = 'sql';
    $class_name = 'usuario';
    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";
        
    if (file_exists($filename)){
    require_once $filename  ;
    }
    
       
});

?>
