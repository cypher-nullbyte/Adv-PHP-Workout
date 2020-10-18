<?php
    if(isset($_COOKIE["username"]))
    {
        echo "Hi ".$_COOKIE['username'];
    }
    else
    {
        echo "Welcome Guest!";
        setcookie("username","cYpHeR (❁´◡`❁)",time()+15);
    }
    echo"<br>-----------<br><br><br><br>";
    print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>
<body style="text-align:center; margin-top:20vh;">
    
</body>
</html>