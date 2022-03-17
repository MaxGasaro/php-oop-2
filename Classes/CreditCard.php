<?php

class CreditCard {

    public $name;
    protected $expirationMonth;
    protected $expirationYear;
    protected $cvv;
    protected $number;

    

    public function setExpirationMonth($number) {
        if (is_numeric($number) && strlen($number) == 2 && $number >= 1 && $number <= 12) {
            $this->expirationMonth = $number;
        }
    }

    public function setExpirationYear($number) {
        if (is_numeric($number) && strlen($number) == 2 && $number >= 00 && $number <= 99) {
            $this->expirationYear = $number;
        }
    }

    public function setCvv($cvv) {
        if (is_numeric($cvv) && $cvv >= 0 && $cvv <= 999) {
            $this->cvv = $cvv;
        }
    }
}