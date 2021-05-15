<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type:application/json');
$dsn="mysql:host=localhost;dbname=the_users";  
$user="root";
$pass="";
$op= array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",);
$db=new PDO($dsn,$user,$pass);
$username = "root";
$password = "";
$database = "the_users";
$mysqli = new mysqli("localhost", $username, $password, $database);



      /*choose one from them as you like*/


     /*first method*/
 
//         $users=array();
//    /*query data you want*/
//         $query = "SELECT * FROM example";
//         if(isset($_GET['key'])){
//             /* Authentication key*/
//             $thekey=$_GET['key'];
//             $count = $db->query("SELECT COUNT(example)  FROM example where key='$thekey'")->fetchColumn();
//          if($count > 0){
//              /*if auth success */
//      $query = "SELECT * FROM example ";
//if ($result = $mysqli->query($query)) {
//    while ($uotput = $result->fetch_assoc()) {
//         
//        /*replace the name and pssword and email with the column*/
//        
//        /*choose one from them as you like*/
//        
//        /*1 */
//        
////             $users[$uotput['name']]=array ('name'=>$uotput['name'],'password'=>$uotput['password'],'email'=>$uotput['email'])
//             ;
//       
//        
//        /*2*/
//                  
//                
////         $users[]=array ($uotput['name']=>array('name'=>$uotput['name'],'password'=>$uotput['password'],'email'=>$uotput['email'])
////             );
//        
//        
//        /*3*/
//                  
//                  
////             $users[]=array ('name'=>$uotput['name'],'password'=>$uotput['password'],'email'=>$uotput['email'])
////             ;
//         
//          }
//    echo  json_encode(["status"=>'true',"data"=>$users]);
//          }
//          
//          }
//             
//             
//              /*if auth not success */
//             
//        else{
//              echo json_encode(["status"=>'false',"data"=>"unknown","maybe solve problem with"=>"request a new Authentication"]); ;
//         }
//         }
//     
//  


 
  
 /*second method*/


//
//$connect=mysqli_connect('localhost','root','','the_users');
//
//$sql=mysqli_query($connect,"SELECT * FROM admins");
//
//$result=mysqli_fetch_all($sql,MYSQLI_ASSOC);
//
//exit(json_encode($result))




    ?>
