<?php

namespace rioel;
class Request extends \optiwariindia\website\request{
    public static function url(){
        $url=parent::url();
        if($url[0]=="")$url[0]="Home";
        return $url;
    }
}