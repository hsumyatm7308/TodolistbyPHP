<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'todolist';

try{

    $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbpass,$dbuser);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    "Error Found:".$e->getMessage();
}




?>