<?php
    function division($dividend,$divisor)
    {
        if($divisor==0)
        {
            throw new Exception('Divison by zero.');
        }
        else {
            $quotient=$dividend/$divisor;
            echo "\n-----------------\n$dividend/$divisor = $quotient\n-----------------\n";
        }
    }
    try
    {
        division(10,2);
        division(12,-3);
        division(14,0);
        echo "\n\nAll divisons performed successfully!\n";
    }
    catch(Exception $e)
    {
        echo "\nException caught: ".$e->getMessage()."\n";
    }

    echo "\n\n\nHave a nice day!";
?>