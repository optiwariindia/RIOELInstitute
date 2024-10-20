<?php 

namespace rioel;

class Database extends \optiwariindia\database{
    public static function init(){
        $db=new self([
            "host"=>"localhost",
            "user"=>"webuser",
            "pass"=>"123ewq",
            "name"=>"rioel"
        ]);
        return $db;
    }
}