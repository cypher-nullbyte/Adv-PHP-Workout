<?php
    // WE will use Object Oriented way
    $conn=new mysqli("localhost","root","","demo");
    if($conn===false)
    {
        die("Could not connect. ".$conn->connect_error);
    }
    $first_name=$conn->real_escape_string($_REQUEST['first_name']);
    $last_name=$conn->real_escape_string($_REQUEST['last_name']);
    $email=$conn->real_escape_string($_REQUEST['email']);

    $sql="INSERT INTO persons (first_name, last_name,email) VALUES ('$first_name','$last_name','$email')";

    if($conn->query($sql)===true)
    {
        echo "Records inserted Successfully.";
    }
    else echo "Could not execute $sql  ".$conn->error;

    $conn->close();
?>