<?php
    require "Rectangle.php";
    $obj=new Rectangle;
    echo $obj->length."\t";
    echo $obj->width."\n";

    $obj->length=30;
    $obj->width=20;

    echo $obj->length."\t";
    echo $obj->width."\n";

    echo $obj->getPerimeter()."\t";
    echo $obj->getArea();

?>