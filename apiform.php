<?php
// class connect extends PDO {
//     public function __construct(){
    
//     parent:: __construct("mysql:host=localhost;dbname=the_users",'root','',
//     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
//     $this->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//     $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
//     }

// }
// class api {
//     function select(){
//         $db= new connect;
//         $users=array();
//         $data=$db->prepare('SELECT * From admins');
//         $data->execute();
//         while($uotput = $data->fetch(PDO::FETCH_ASSOC)){
//             // $users[$uotput['name']]=array (
//             $users[]=array (
//             'email'=>$uotput['email'],
//             'password'=>$uotput['password']
//             );
//         }
//        return  json_encode($users);

//     }
// }
//  $API = new API;
//  header('Content-Type:application/json');
//  echo $API->select();

$connect=mysqli_connect('localhost','root','','the_users');

$sql=mysqli_query($connect,"SELECT * FROM admins");

$result=mysqli_fetch_all($sql,MYSQLI_ASSOC);

exit(json_encode($result))
?>