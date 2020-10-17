<?php
    $dir="testdir";
    if(!file_exists($dir))
    {
        if(mkdir($dir)) echo "Directory created!";
        else echo "Couldn't create Directory :( !";
    }
    else echo "Directory already exists :) !";
    
?>