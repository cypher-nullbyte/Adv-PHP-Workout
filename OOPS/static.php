<?php
    class HelloClass
    {
        public static $greeting="Hello World!";

        public static function sayHello()
        {
            echo self::$greeting."\n";
        }
    }
    echo HelloClass::$greeting."\n";
    HelloClass::sayHello();

    $hello=new HelloClass;
    // echo $hello->greeting."\n";   // WARNING 
    $hello->sayHello();

?>