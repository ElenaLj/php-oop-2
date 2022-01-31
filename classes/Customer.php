<?php
class Customer {
    private $name;
    private $surname;
    private $email;
    
    public function __construct($_name, $_surname, $_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurame() {
        return $this->surname;
    }

    public function getEmail() {
        return $this->email;
    }
}
?>