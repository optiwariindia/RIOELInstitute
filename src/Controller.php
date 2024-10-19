<?php 

namespace rioel;
class Controller extends \optiwariindia\website\view {
    public function __construct(){
        $url=Request::url();
        $page=[
            "title"=>"Home Page",
            "keywords"=>"jfgh,ghjhg"
        ];
        switch (count($url)) {
            case 0:
                exit (0);
            case 1:
                if($url[0]=="")$page["title"]="Home Page";
                else $page["title"]= strtoupper($url[0]);
            case 2:
            default:
                # code...
                break;
        }
        self::dir(HOMEDIR.DIRECTORY_SEPARATOR."views");
        self::init();
        self::render("index.twig",[
            "page"=>$page
        ]);
    }
}
