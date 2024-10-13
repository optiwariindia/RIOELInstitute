<?php
include_once "../vendor/autoload.php";
include_once "../includes/connection.php";

class Visitors{
  public $id=null;
  public $name="";
  public $email= "";
  public $phone= "";
  public $createdAt= "";
  public $updatedAt= "";
  public function __Construct(
    $id=null, $name="", $email="", $phone="", $createdAt="now()",$updatedAt="now()"
  ){
    $this->id=$id;
    $this->name=$name;
    $this->email=$email;
    $this->phone=$phone;
    $this->createdAt=$createdAt;
    $this->updatedAt=$updatedAt;
  }
  public function save(){
    global $db;
    return $db->insert("visitor",[
      "name"=>$this->name,
      "email"=>$this->email,
      "phone"=>$this->phone,
      "createdAt"=>$this->createdAt,
      "updatedAt"=>$this->updatedAt
    ]);    
  }
  public function get($id){
    global $db;
    $output=[];
    $temp=$db->select("visitor","*","where id = {$id}");
    foreach ($temp as $key => $value) {
      $output[]=new Visitors($value['id'],$value['name'],$value['email'],$value['phone'],$value['createdAt'],$value['updatedAt']);
    }
    return $output;
  }
  public function getAll(){
    global $db;
    $output=[];
    $temp=$db->select("visitor","*");
    foreach ($temp as $key => $value) {
      $output[]=new Visitors($value['id'],$value['name'],$value['email'],$value['phone'],$value['createdAt'],$value['updatedAt']);
    }
    return $output;
  }
  public function delete($id){
    global $db;
    return $db->delete('visitor',"where id = {$id}");
  }
  public function update($id,$data){
    global $db;
    $visitor=$this->get($id)[0]??null;
    if($visitor == null)return false;
    return $db->update("visitor",[
      "name"=>$data["name"],
      "email"=>$data["email"],
      "phone"=>$data["phone"]
    ],"where id={$id}");
  }
}