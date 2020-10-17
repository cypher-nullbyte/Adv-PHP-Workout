<?php
    require "Rectangle.php";

    class Square extends Rectangle{
        public function isSquare()
        {
            if($this->length==$this->width) return true;
            else return false;
        }
    }
    $obj=new Square;
    $obj->length=20;
    $obj->width=20;

    if($obj->isSquare())
    {
        echo "The area of the square is: ";
    }
    else "The area of the rectangle is: ";
    echo $obj->getArea();
?>