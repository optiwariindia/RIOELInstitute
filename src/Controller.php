<?php 

namespace rioel;
class Controller extends \optiwariindia\website\view {
    public function __construct(){
        $url=Request::url();
        $page=[
            "title"=>"404 Not Found",
            "keywords"=>"jfgh,ghjhg"
        ];
        $method=["\\rioel\\Website","undefined"];
        switch (count($url)) {
            case 0:
                exit (0);
            case 1:
                $method=["\\rioel\\Website",strtolower($url[0])];
                break;
            case 2:
            default:
                # code...
                break;
        }
        
        if(method_exists($method[0],$method[1])){
        call_user_func_array($method,[]);
    
        }
        self::show("index.twig",[
            "page"=>$page
        ]);
    }
    public static function show($view, $data=[]){
        self::dir(HOMEDIR.DIRECTORY_SEPARATOR."views");
        self::init();
        self::render($view,$data);
    }
    public function test($name,$email){
        echo $name;
        echo "Test function has been called";
        die;
    }
}
