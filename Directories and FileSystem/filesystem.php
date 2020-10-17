<?php
    $file="data.txt";
    // Check the existance of file
    if(file_exists($file))
    {
        $handle=fopen($file,"r") or die("Cannot open the file :( !");
        // fwrite($handle,"Hello World!\nThis is Chiranjeet Singh Jawanda :)\nNice to meet you!");
        // file_put_contents($file,"Hello World!\nThis is Chiranjeet Singh Jawanda :)\nNice to meet you!")
        // or die("Cannot write the file :( !");
        echo "-------------------FREAD-------------------------\n";
        $content=fread($handle,filesize($file));
        echo $content;
        echo "-------------------READfile-------------------------\n";
        $content=readfile($file) or die("Cannot open the file :( !");
        echo $content;
        echo "-------------------file_get_contents-------------------------\n";
        $content=file_get_contents($file) or die("Cannot open the file :( !");
        echo $content;
        echo "-------------------file-------------------------\n";
        $content=file($file) or die("Cannot open the file :( !");
        foreach($content as $x)
        {
            echo $x;
        }
        fclose($handle);
    }
    else    echo "file doesn't exist!";
?>