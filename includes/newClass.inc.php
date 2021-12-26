<?php
class MyDetails {
    // properties goes in here + Methods
    // private visibilities can only be accessed in the same class
    public $firstName = 'Dhikrullah';
    private $lastName = 'Ajayi';
    private $age = '16';

    //use variable this, which means to refer to the class and using it in a method of same class to call a properties with public visibility
    // public function OwnerProp(){
    //     $ownerFirstName = $this->firstName;
    //     return "<h5>" . $ownerFirstName . "</h5>";
    // }

}

    /*

    class Pet extends MyDetails {

        //accessing a protected visibility in a class from another class using extend inbuilt function
    public function OwnerProp(){
        $ownerFirstName = $this->firstName;
        return "<h5>" . $ownerFirstName . "</h5>";
    }


    // this is a method or function
    /*
    public function owner() {
        $petTone = 'Meoooooowww';
        return "<h5>" . $petTone . "</h5>";
    }*/


    //using one class to create many objects

    /*
    class Person{
        public $age;
        public $name;
        public $address;
        public $sleepTime;

        /*
        public function bedTime($sleepTime) {
            $this->sleepTime = $sleepTime;
        }
        */


/*

        // static method and properties
        public static $sleepAge = 32;

        // methods
        public static function setSleepAge($newSleepAge){
            self::$sleepAge = $newSleepAge;


        }

    }*/


    class School{
        public $class;
        public $uniformColor;
        public $departments;
    
        public function __construct($c, $uniformColor, $departments){
            $this->classes = $c;
            $this->uniformColor = $uniformColor;
            $this->departments = $departments;
        }

        // methods
        public function switchSchoolDept($dept){
            $this->dept = $dept;

        }
    



    }
    


?>