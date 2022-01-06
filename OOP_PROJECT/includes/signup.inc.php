<?php

if (isset($_POST['submit'])) {
    // grab the data from users in frontend
    $lname = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    //instantiate SignUpController class goes
include "..//classes/dbh.c;asses.php";
include "../classes/sign.classes.php";
include "../classes/signup_contr.classes.php";

$signup = new SignupContr($lname, $pwd, $pwdRepeat, $email);


    //Run error handlers and user signup


    //going back to landing page or front page
}