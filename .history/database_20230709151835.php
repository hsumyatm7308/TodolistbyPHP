<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'todolist';

try{

    $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbpass,$dbuser);

}catch(Exception $e){
    "Error Found:".$e->getMessage();
}




?>