<?php
    $link=mysqli_connect("localhost","root","","demo");

    if($link===false)
    {
        die("Could not connect. ".mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW DATA</title>
</head>
<body>
    <?php
        $sql="SELECT * FROM persons";
        if($result=mysqli_query($link,$sql))
        {
            if(mysqli_num_rows($result)>0)
            {
                echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>first_name</th>";
                    echo "<th>last_name</th>";
                    echo "<th>email</th>";
                echo "</tr>";
                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            }
            else echo "No records found!";
        }
        else echo "Could not execute $sql. ".mysqli_error($link);
        mysqli_close($link);
    ?>
</body>
</html>