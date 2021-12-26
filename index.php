<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

    <?php
include "includes/newClass.inc.php";

// $instantiateClassPetMethod = new Pet();
// echo $instantiateClassPetMethod->owner();


// instatiating the MyDetails class, calling the properties using THIS inbuilt function
// $instantiateMyDetailsClass = new MyDetails();

//access the properties via the method or function in the Class
// echo $instantiateMyDetailsClass->firstName;


// ===============================
// using one class to create many objects or instances.

/*
$person1 = new Person();

$person1->bedTime('3:00pm');
echo $person1->sleepTime;


$person2 = new Person();

$person2->bedTime('5:00am');
echo "<br>";
echo $person2->sleepTime;

*/

// static methods and properties

// $personSleeping = new Person();
// echo $personSleeping->$sleepAge;
/*
        echo Person::$sleepAge;
        echo Person::setSleepAge(33);
        echo Person::$sleepAge;

*/
// ==============================================
// Construct and destruct
$school1 = new School("Baba School", 'White and Blue', 'Science');

echo $school1->uniformColor;
// echo $school2->departments;

$school1->switchSchoolDept('Commercial');
echo $school1->dept;



    ?>
</body>
</html>