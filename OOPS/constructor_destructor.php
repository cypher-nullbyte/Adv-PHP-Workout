<?php
    class MyClass
    {
        public function __construct()
        {
            echo "The class \"".__CLASS__."\" was initiated!\n";
        }
        public function __destruct()
        {
            echo "The class \"".__CLASS__."\" was destroyed.\n";
        }
    }
    $obj=new MyClass;
    //Destry the object explicitly
    unset($obj);
    echo "The end of the file is reached.";
?>