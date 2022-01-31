<?php 
class Product {
    public $name;
    public $description;
    public $manufacturer;
    public $price;

    public function __construct($_name, $_description, $_manufacturer, $_price){
        $this->name = $_name;
        $this->description = $_description;
        $this->manufacturer = $_manufacturer;
        $this->price = $_price;
    }
}
?>