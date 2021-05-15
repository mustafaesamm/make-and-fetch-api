<?php
 header("Access-Control-Allow-Origin: *");
 header('Content-Type:application/json');
class connect extends PDO {
    public function __construct(){
        
    parent:: __construct("mysql:host=localhost;dbname=id15516854_the_users",'id15516854_mustafa','o0dtK{Ox>9O031ex',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $this->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }

}
class api {
    function select(){
        $db= new connect;
        $users=array();
        $data=$db->prepare('SELECT * From participants');
        $data->execute();
        while($uotput = $data->fetch(PDO::FETCH_ASSOC)){
            // $users[$uotput['name']]=array (
            $users[]=array (
            'name'=>$uotput['name'],
            'email'=>$uotput['email'],
            'phone'=>$uotput['phone'],
            'type'=>$uotput['type'],
            'course'=>$uotput['course']
            );
        }
      return  json_encode($users);

    }
}
 $API = new API;
 header('Content-Type:application/json');
 echo $API->select();

?>