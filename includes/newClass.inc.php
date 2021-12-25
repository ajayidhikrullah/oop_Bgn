<?php
class MyDetails {
    // properties goes in here + Methods
    // private visibilities can only be accessed in the same class
    private $firstName = 'Dhikrullah';
    private $lastName = 'Ajayi';
    private $age = '16';

    //use variable this, which means to refer to the class and using it in a method of same class to call a properties with public visibility
    public function OwnerProp(){
        $ownerFirstName = $this->firstName;
        return "<h5>" . $ownerFirstName . "</h5>";
    }

}


class Pet {
    // this is a method or function
    public function owner() {
        $petTone = 'Meoooooowww';
        return "<h5>" . $petTone . "</h5>";
    }
    
}