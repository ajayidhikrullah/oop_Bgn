<?php

if (isset($_POST['submit'])) {
    // grab the data from users in frontend
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    //instantiate SignUpController class goes
include "../classes/sign.classes.php";
include "../classes/signup_contr.classes.php";



    //Run error handlers and user signup


    //going back to landing page or front page
}