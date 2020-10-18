<?php
    function printValues($arr)
    {
        global $count;
        global $values;
        if(!is_array($arr))
        {
            die("Input is not an array:( !");
        }

        foreach($arr as $key=>$value)
        {
            if(is_array($value))
            {
                printValues($value);
            }
            else
            {
                $values[]=$value;
                $count++;
            }
        }
        return array('total'=>$count,'values'=>$values);
    }


    $json = '{
        "book": {
            "name": "Harry Potter and the Goblet of Fire",
            "author": "J. K. Rowling",
            "year": 2000,
            "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
            "genre": "Fantasy Fiction",
            "price": {
                "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
            }
        }
    }';

    $arr=json_decode($json,true);
    $result=printValues($arr);
    echo $result['total']." values found: \n";
    echo implode("\t",$result['values']);
?>