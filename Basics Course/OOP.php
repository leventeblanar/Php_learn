<?php

abstract class Car{
    protected $brand;
    protected $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function describe(){
        echo "Ez egy {$this->color} {$this->brand}.<br>";
    }

    abstract public function startEngine();
}

class ElectricCar extends Car {
    private $batteryLevel;

    public function __construct($brand, $color, $batteryLevel) {
        parent::__construct($brand, $color);
        $this->batteryLevel = $batteryLevel;
    }

    public function startEngine(){
        echo "A(z) {$this->brand} elektromos motorja csendben elindul. {$this->batteryLevel}% töltöttség. <br>";
    }
}

class GasCar extends Car {
    private $fuelLevel;

    public function __construct($brand, $color, $fuelLevel) {
        parent::__construct($brand, $color);
        $this->fuelLevel = $fuelLevel;
    }

    public function startEngine(){
        echo "A(z) {$this->brand} benzines motorja felbőg... {$this->fuelLevel}% üzemagyag töltöttség. <br>";
    }
}

// // objektum létrehozás
// $myCar = new Car("Audi", "Fekete");

// // Külsó kód csak a publikus metódusokon keresztül érheti el az adatokat:
// echo "Márka: ", $myCar->getBrand() . "<br>";
// echo "Szin: ", $myCar->getColor() . "<br>";

// $myCar->accelerate(30);
// $myCar->setColor("piros");
// echo "Új szín: " . $myCar->getColor() . "<br>";


// Tesztelés
$vehicles = [
    new ElectricCar("Tesla", "fehér", 85),
    new GasCar("BMW", "fekete", 60),
    new ElectricCar("Nissan Leaf", "zöld", 40)
];

// polymorfizmus demonstrálása

foreach ($vehicles as $vehicle) {
    $vehicle->describe();
    $vehicle->startEngine();
    echo "<hr>";
}


?>