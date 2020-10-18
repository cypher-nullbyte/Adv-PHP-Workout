<?php
    namespace MyNamespace;
    class MyClass2
    {
        public function getNamespace(){
            return __NAMESPACE__;
        }
    }
    $obj = new MyClass2();
    echo $obj->getNamespace()."\n"; // Displays: MyNamespace
?>