<?php
    $link=mysqli_connect("localhost","root","","demo");

    if($link===false)
        die("Could not connect. ".mysqli_connect_erro());
    $sql="INSERT INTO persons (first_name,last_name,email) VALUES(?,?,?)";
    if($stmt=mysqli_prepare($link,$sql))
    {
        mysqli_stmt_bind_param($stms,"sss",$first_name,$last_name,$email);

        $first_name=$_REQUEST['fist_name'];
        $last_name=$_REQUEST['last_name'];
        $email=$_REQUEST['email'];

        if(mysqli_stmt_execute($stmt))
            echo "Records inserted successfully.";
        else echo "Could not execute querry : $sql. ".mysqli_erro($link);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
?>