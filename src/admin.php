<?php

namespace rioel;

class admin extends Controller
{
    public static function login()
    {
        self::show("admin/login.twig", [
            "page" => [
                "title" => "Admin Area",
                "url" => "/admin/login"
            ],
        ]);
    }
    public static function dashboard(){
        $db=Database::init();
        $db->mode(1);
        if(self::isLoggedIn()){
            $contacts=$db->select("visitor","*","order by id desc limit 4 offset 2");
            self::show("admin/dashboard.twig",[
                "contacts"=>$contacts,
                "page"=>[
                    "title"=>"Dashboard",
                    "url"=>"/admin/dashboard"
                ]
            ]);
        }else{
            $inputs=Request::inputs();
            $user=$db->select("login","*","where username like '{$inputs['user']}' and password=md5('{$inputs['password']}')");
            if(count($user)==1){
                $_SESSION['user']=[
                    'id'=>$user[0]['id'],
                    'username'=>$user[0]['username']
                ];
                header("Location: /admin/dashboard");
            }
            header('Location: /admin/login?message=InvalidCredentidals');
        }
    }
    public static function logout(){
        unset($_SESSION['user']);
        header('Location: /admin/login');
    }
    public static function isLoggedIn(){
        return isset($_SESSION['user']);
    }
 }
