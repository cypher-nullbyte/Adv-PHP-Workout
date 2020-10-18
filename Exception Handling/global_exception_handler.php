<?php
    function handleUncaughtException($e)
    {
        echo "Something went wrong :(. Please contact us if the problem persists ^_^ !";
        $error = "Uncaught Exception: " . $message = date("Y-m-d H:i:s - ");
        $error .= $e->getMessage() . " in file " . $e->getFile() . " on line " . $e->getLine() . "\n";
        $dir="log";
        if(!file_exists($dir))
        {
            mkdir($dir);
            $temp_handle=fopen("log/exceptionLog.log",'w');
            fclose($temp_handle);
        }
        error_log($error,3,"{$dir}/exceptionLog.log");
    }
    set_exception_handler("handleUncaughtException");
    throw new Exception("Let us test it xD !");

?>