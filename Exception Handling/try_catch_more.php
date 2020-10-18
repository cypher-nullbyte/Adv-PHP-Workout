<?php
    error_reporting(0);
    try
    {
        $file="somefile.txt";
        $handle=fopen($file,"r");
        if(!$handle)
        throw new Exception("Cannot open the file!",5); 
    $content=fread($handle,filesize($file));
    if(!content)
        throw new Exception("Could not read the file!",10);

    fclose($handle);
    echo $content;
    }
    catch(Exception $e)
    {
        echo "\nException caught! \n------------------------------------------\n";
        echo "Error message: ".$e->getMessage()."\n";
        echo "Error File: ".$e->getFile()."\n";
        echo "Error Line: ".$e->getLine()."\n";
        echo "Error code: ".$e->getCode()."\n";
        echo "Error Treace: ".$e->getTraceAsString()."\n";
        echo "------------------------------------------\n";
    }


?>