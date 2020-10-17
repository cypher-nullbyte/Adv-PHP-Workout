
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading</title>
</head>
<body>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0)
        {
            $allowed=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");
            $filename=$_FILES["photo"]["name"];
            //---------IF WE Want to allow different users submit files with same name, we can use----
            //$filename = time() . '_' . $_FILES["photo"]["name"];
            $filetype=$_FILES["photo"]["type"];
            $filesize=$_FILES["photo"]["size"];
            $ext=pathinfo($filename,PATHINFO_EXTENSION);
            if(!array_key_exists($ext,$allowed)) die("Please select an allowed format only :( !");
            $maxsize=5*1024*1024;
            if($filesize>$maxsize) die("File size should be less than 5mb :( !");
            if(in_array($filetype,$allowed))
            {
                if(file_exists("upload/".$filename)) echo $filename." already exists.<br>";
                else
                {
                    move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$filename);
                    echo "Your file has been successfully uploaded!<br>";
                }
            }
            else echo "There was a problem uploading your file, Please Try again!<br>";
        }
        else echo "Error: ".$_FILES["photo"]["error"];
    }
?>
</body>
</html>