<?php
    echo "Line number ".__LINE__."\n"; // Displays: Line number 2
    echo "Line number ".__LINE__."\n"; // Displays: Line number 3
    echo "Line number ".__LINE__."\n"; // Displays: Line number 4

    // Displays the absolute path of this file
    echo "The full path of this file is: " . __FILE__."\n";

    // Displays the directory of this file
    echo "The directory of this file is: " . __DIR__."\n";

    function myFunction(){
        echo  "The function name is - " . __FUNCTION__."\n";
    }
    myFunction(); // Displays: The function name is - myFunction

    class MyClass
    {
        public function getClassName()
        {
            return __CLASS__;
        }
    }
    $obj = new MyClass();
    echo $obj->getClassName()."\n"; // Displays: MyClass

    class Sample
        {
            public function myMethod(){
                echo __METHOD__."\n";
            }
        }
        $obj = new Sample();
        $obj->myMethod(); // Displays: Sample::myMethod
    


    
?>