<?php
    // we will use PDO way
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=demo","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        die("Could not connect. ".$e->getMessage());
    }

    try
    {
        $sql="CREATE TABLE persons(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE)";

        $pdo->exec($sql);
        echo "Table created successfully.";
    }
    catch(Exception $e)
    {
        die("Could not execute $sql. ".$e->getMessage());
    }
    unset($pdo);
?>