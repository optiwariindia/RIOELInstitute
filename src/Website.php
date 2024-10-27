<?php

namespace rioel;

class Website extends Controller{
    public static function home(){
        self::show("index.twig",[
            "page"=>[
                "title"=>"Home Page",
                "url"=>"/"
            ],
            "navbar"=>self::navbar()
            ]);
    }
    public static function about(){
        self::show("index.twig",[
            "page"=>[
                "title"=>"About Us",
                "url"=>"/".implode("/",Request::url())
            ],
            "navbar"=>self::navbar()
            ]);
    }
    public static function contact(){
        self::show("index.twig",[
            "page"=>[
                "title"=>"Contact Us",
                "url"=>"/".implode("/",Request::url())
            ],
            "navbar"=>self::navbar()
            ]);
    }
    private static function navbar(){
        return [
            [
              "link" => "/",
              "text" => "Home"
            ],
            [
              "link" => "/about",
              "text" => "About Us"
            ],
            [
              "link" => "/products",
              "text" => "Our Courses"
            ],
            [
              "link" => "/faq",
              "text" => "Frequently Asked Questions"
            ],
            [
              "link" => "/contact",
              "text" => "Contact Us"
            ]
          ];
    }
    public static function savecontact(){
        $inputs=Request::inputs();
        $db=Database::init();
        $resp=$db->insert("visitor",[
                "name"=>$inputs["name"],
                "email"=>$inputs["email"],
                "phone"=>$inputs["phone"],
                "createdAt"=>"now()",
                "updatedAt"=>"now()",
        ]);
        self::api([
            "status"=>"success",
            "data"=>$inputs,
            "message"=>[
                "title"=>($resp['result']=="true")?"Submitted Successfully":"Something Went Wrong",
                "text"=>($resp['result']=="true")?"
                Your request has been submitted successfully, One of our correspondent will get back to you soon. Your request number is {$resp['id']}.
                ":"
                Unable to process your request at the moment. Please try after some time.
                ",
            ]
        ]);
    }
}