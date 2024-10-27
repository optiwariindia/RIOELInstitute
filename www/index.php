<?php 
session_start();
// print_r($GLOBALS);
// print_r($_SERVER);
// print_r($_GET);
// print_r($_POST);
// print_r($_REQUEST);
// print_r($_ENV);
// unset($_SESSION["I"]); 
// print_r($_SESSION);
// session_destroy();
// print_r($_COOKIE);
/* 
print_r($_FILES);
*/
// die;

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
