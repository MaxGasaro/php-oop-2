<?php

class User {

    public $name;
    public $lastname;
    protected $email;
    protected $discount;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
            $this->email = $email;
        } else {
            echo "inidirizzo mail non valido";
        }
    }

    public function getDiscount() {
        return $this->discount;
    }

    
    
}