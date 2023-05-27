<?php
    include_once("url.php");
    include_once("connection.php");

    $get = $_GET;
    $post = $_POST;
    $contacts = [];
    if($get){
        //view
        $id = $get["id"];
        $query = "SELECT * FROM user WHERE id = :id";
        $statements = $connection->prepare($query);
        $statements->bindParam(":id", $id);

        try{
            $statements->execute();
            $contact = $statements->fetch();
        } catch(PDOException $e){
            $erro = $e->getMessage();
        }
    }
    else if($post){
        if($post["type"] === "create"){
            $query = "INSERT INTO user(name, number, description) VALUES (:name, :number, :description)";
            $statements = $connection->prepare($query);

            try{
                $statements->bindParam(":name", $post["name"]);
                $statements->bindParam(":number", $post["number"]);
                $statements->bindParam(":description", $post["description"]);
                $statements->execute();
            } catch(PDOException $e){
                $erro = $e->getMessage();
            }
        }
        else if($post["type"] === "edit"){
            $query = "UPDATE user SET name = :name, number = :number, description = :description WHERE id = :id";
            $id = $post["id"];
            $name = $post["name"];
            $number = $post["number"];
            $description = $post["description"];

            $statements = $connection->prepare($query);
            $statements->bindParam(":name", $name);
            $statements->bindParam(":number", $number);
            $statements->bindParam(":description", $description);
            $statements->bindParam(":id", $id);

            try{
                $statements->execute();
            } catch(PDOException $e){
                $erro = $e->getMessage();
            }
        }
        else if($post["type"] === "delete"){
            print_r($post);
            $id = $post["id"];
            $query = "DELETE FROM user WHERE id = :id";
            $statements = $connection->prepare($query);
            $statements->bindParam(":id", $id);

            try{
                $statements->execute();
            } catch(PDOException $e){
                $erro = $e->getMessage();
            }
        }
        header("Location:" . $URL . "../index.php");
    }
    else{
        $query = "SELECT * FROM user";
        $statements = $connection->prepare($query);

        try{
            $statements->execute();
            $contacts = $statements->fetchAll();
        }
        catch(PDOException $e){
            $erro = $e->getMessage();
            echo $erro;
        }
    }
    //fechando conexão
    $connection = null;
?>