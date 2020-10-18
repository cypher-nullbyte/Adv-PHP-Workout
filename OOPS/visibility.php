<?php
    class Automobile
    {
        public $fuel;
        protected $engine;
        private $transmission;

        public function set_transmission($transmission)
        {
            $this->transmission=$transmission;
        }
    }
    class Car extends Automobile
    {
        public function __construct()
        {
            echo "The class \"".__CLASS__."\" was initiated!\n";
        }
        public function set_engine($engine)
        {
            $this->engine=$engine;
        }
    }
    //CREATEING object of Car class
    $car =new Car;
    $car->fuel='Diesel'; // OK :)
    // $car->engine='2200 cc'; //fatal error
    $car->set_engine('2200 cc'); //OK
    // $car->transmission='Automatic'; //undefined
    $car->set_transmission('Automatic'); //OK
?>