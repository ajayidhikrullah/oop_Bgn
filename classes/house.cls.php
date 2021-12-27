<?php
    class House{
        // properties
        public $houseOwner;
        public $houseStreet;
        public $houseNumber;


        //now, method
        public function __construct($houseOwner,$houseNumber, $houseStreet){
            $this->houseOwner = $houseOwner;
            $this->houseStreet = $houseStreet;
            $this->houseNumber = $houseNumber;

        

        }

        public function getHouse(){
            $house = $this->houseOwner . " lives in no." .  $this->houseNumber . " of " . $this->houseStreet;
            return $house;
        }
    }



?>