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
$instantiateMyDetailsClass = new MyDetails();

//access the properties via the method or function in the Class
echo $instantiateMyDetailsClass->OwnerProp();



    ?>
</body>
</html>