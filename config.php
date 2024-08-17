<?php
$host = "localhost";
$dbname = "shop";
$user = "root";
$pass = "";
try{
    $con = new PDO("mysql:host = $host; dbname = $dbname", $user, $pass);
    //$con = new PDO("mysql:host = $servername; dbname = $dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}catch(PDOException $e){
    echo "connection is failed " . $e->getMessage();
}         