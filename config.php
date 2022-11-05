<!-- <

$dbname ="mysql:host=localhost; dbname=User_db2";
$user='root';
$password='';
$option= array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'
);
try{
    $connection = new PDO($dbname,$user,$pass, $option);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}

catch(PDOException $er){
    echo $er;
    exit();
}
? -->

<?php

$conn = mysqli_connect('localhost','root','','user_db');

?>