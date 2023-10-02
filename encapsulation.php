<?php

class Car {
    private $brand;
    private $model;
    private $licenceno;
    private $year;

    public function __construct($brand, $model, $licenceno, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->licenceno = $licenceno;
        $this->year = $year;
    }
        // Setter Methods
        public function set_Brand($brand){
            $this->brand = $brand;
        }

        public function set_Model($model){
            $this->model = $model;
        }

        public function set_licenceno($licenceno){
            $this->licenceno = $licenceno;
        }

        public function set_Year($year){
            $this->year = $year;
        }

        // Getter Methods
        public function get_Brand(){
            return $this->brand;
        }

        public function get_Model(){
            return $this->model;
        }

        public function get_licenceno(){
            return $this->licenceno;
        }

        public function get_Year(){
            return $this->year;
        }
}

// create object
$toyota = new Car("toyota","Alphard","B4-9999",2023);

// display initial properties using getter methods
echo " Brand: " . $toyota->get_Brand() . "<br>" . "Model:" . $toyota->get_Model() . "<br>";
echo " Licence NO: " . $toyota->get_licenceno() . "<br>" . " Year: " . $toyota->get_Year() . "<br><br>";

// properties using setter method
$toyota->set_Brand("Toyota");
$toyota->set_Model("Velox");
$toyota->set_licenceno("32-4445");
$toyota->set_Year(2021);


// Displaying updated properties using getter methods
echo " Brand: " . $toyota->get_Brand() . "<br>" . "Model:" . $toyota->get_Model() . "<br>";
echo " Licence NO: " . $toyota->get_licenceno() . "<br>" . " Year: " . $toyota->get_Year() . "<br><br>";





























?>