<?php
    // WE WILL USE PROCEDURAL WAY
    $conn=mysqli_connect("localhost","root","");

    if($conn===false)
        die("Could not connect. ".mysqli_connect_error());
    $sql="CREATE DATABASE demo";
    if(mysqli_query($conn,$sql))
        echo "Database created Successfully!";
    else echo "Could not be able to execute $sql. ".mysqli_error($conn);

    mysqli_close($conn);
?>