<?php 
(function (){
    
    $include=explode(PATH_SEPARATOR,get_include_path());
    $dir=__DIR__;
    array_unshift($include,$dir);
    $temp=explode(DIRECTORY_SEPARATOR,$dir);
    array_pop($temp);
    $dir=implode(DIRECTORY_SEPARATOR,$temp);
    array_unshift($include,$dir);
    set_include_path(implode(PATH_SEPARATOR,$include));
    define("HOMEDIR",$dir);
    define("CONFIG","config.json");
})();

include "../vendor/autoload.php";


$cls=new \rioel\Controller();
