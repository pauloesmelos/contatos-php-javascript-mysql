<?php
    //sem DAO ou classes, apenas p fins de estudo
    $host = "localhost";
    $port = "";
    $dbname = "contact";

    $user = "root";
    $password = "";
    
    try{
        $connection = new PDO("mysql:$host;port=$port;dbname=$dbname", $user, $password);
    } catch(PDOException $e){
        $erro = $e->getMessage();
    }
?>