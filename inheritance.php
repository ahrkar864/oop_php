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

    // Setter Methosds
    public function set_Brand($brand) {
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
    public function get_Brand() {
        return $this->brand;
    }

    public function get_Model() {
        return $this->model;
    }

    public function get_Licenceno() {
        return $this->licenceno;
    }

    public function get_Year() {
        return $this->year;
    }
}

$toyota = new Car("Toyota", "Alphard", "B1-0000", 2023);

echo " Brand " . $toyota->get_Brand() . "<br>" . " Model " . $toyota->get_Model() . "<br>";
echo " License N0" . $toyota->get_Licenceno() . "<br>" . " Year " . $toyota->get_Year() . "<br><br>";

$toyota->set_Brand("Toyota");
$toyota->set_Model("Velox");
$toyota->set_licenceno("32-4445");
$toyota->set_Year(2021);
echo " Brand: " . $toyota->get_Brand() . "<br>" . "Model:" . $toyota->get_Model() . "<br>";
echo " Licence NO: " . $toyota->get_licenceno() . "<br>" . " Year: " . $toyota->get_Year() . "<br><br>";

class ElectricCar extends Car {
    private $batteryType;

    public function __construct($brand, $model, $licenceno, $year, $batteryType) {
        parent:: __construct($brand, $model, $licenceno, $year);
        $this->batteryType = $batteryType;
    }

    public function get_BatteryType() {
        return $this->batteryType;
    }
}

$tesla = new ElectricCar("Tesla", "Model S", "TSLA-001", 2023, "Lithium-ion");

echo " Car Details:<br>";
echo " Brand: " . $tesla->get_Brand() . "<br> Model: " . $tesla->get_Model() . "<br>";
echo " License NO: " . $tesla->get_Licenceno() . "<br> Year: " . $tesla->get_Year() . "<br>";
echo " ElectricCar Details:<br>";
echo " Battery Type: " . $tesla->get_BatteryType() . "<br>";

?>