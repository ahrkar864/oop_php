<?php

class Car {
    public $brand;
    public $model;
    public $licenceno;
    public $year;

    public function __construct($brand, $model, $licenceno, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->licenceno = $licenceno;
        $this->year = $year;
    }

    public function get_Brand(){
        return $this->brand;
    }

    public function get_Model(){
        return $this->model;
    }

    public function get_Licenceno(){
        return $this->licenceno;
    }

    public function get_Year(){
        return $this->year;
    }
}

$toyota = new Car("Toyota","Land Cruiser (170", "93-8856", 1984);

echo " Brand= " .$toyota->get_Brand(). "<br>";
echo " Model= " .$toyota->get_Model(). "<br>";
echo " Licence= " .$toyota->get_Licenceno(). "<br>";
echo " Year= " .$toyota->get_Year(). "<br>";


















?>