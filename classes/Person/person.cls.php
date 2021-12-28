<?php
declare(strict_types = 1);

namespace Person;

    class Person {
        public $name;
        public $age;

        public function __construct($name){
            $this->name = $name;
            // $this->age = $age;
        }

        public function getPerson(){
            $person = $this->name . "is " . $this->age . " years old!";
            return $person;
        }

        public function setName(string $newName){
            $this->name = $newName;
        }

        public function getName(){
            return $this->name;
        }




    }



?>