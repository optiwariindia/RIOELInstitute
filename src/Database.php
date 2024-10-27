<?php 

namespace rioel;

class Database extends \optiwariindia\database{
    public static function init(){
        // $db=new self([
        //     "host"=>"localhost",
        //     "user"=>"webuser",
        //     "pass"=>"123ewq",
        //     "name"=>"rioel"
        // ]);
        $db=new self([
                "host"=>"db",
                "user"=>"webuser",
                "pass"=>"123ewq",
                "name"=>"rioel"
            ]);
        return $db;
    }
    // public static function inputs(){
    //     $inputs=parent::inputs();
    //     print_r($inputs);
    //     return $inputs;
    // }
}