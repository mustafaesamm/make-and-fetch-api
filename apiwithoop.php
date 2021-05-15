<?php
 header("Access-Control-Allow-Origin: *");
 header('Content-Type:application/json');
class connect extends PDO {
    public function __construct(){
//         put here you database 
    parent:: __construct("mysql:host=localhost;dbname= name of database",'theusername','pass',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $this->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }

}
class api {
    function select(){
        $db= new connect;
        $users=array();
        $data=$db->prepare('SELECT * From example');
        $data->execute()
        while($uotput = $data->fetch(PDO::FETCH_ASSOC)){
            // $users[$uotput['name']]=array (
            $users[]=array (
            'name'=>$uotput['name'],
            'email'=>$uotput['email'],
            'phone'=>$uotput['phone'],
            );
        }
      return  json_encode($users);

    }
}
 $API = new API;
 header('Content-Type:application/json');
 echo $API->select();

?>
