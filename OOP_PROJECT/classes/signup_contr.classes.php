<?php
class signUpContr{
    private $lname;
    private $pwd;
    private $pwdRepeat;
    private $emailAddress;

    public function __construct($lname, $pwd, $pwdRepeat, $email) {
        $this->lname = $lname;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    private function signupUser(){
        if($this_>emptyInput() == false){
            //echo 'Empty input 000';
            header('Location: ../index.php?error=emptyinput');
            exit();
        }

        if($this->invalidLname() == false) {
            //echo 'invalid usrname';
            header('Location: ../index.php?error=invalidusername');
            exit();
        }

        if($this->pwdMatch() == false){
            //echo 'passwords dont match!';
            header('location: ../index.php?error=passwordmatch');
            exit();
        }

        if($this->lnameTekenCheck() == false){
            //echo 'username or email already taken;

            
        
        
        
        }


    }





    private function emptyInput(){
        $result;
        if(!empty($this->lname) || !empty($this->pwd) || !empty($this->pwdRepeat) || !empty($this->email)){
            $result = false;
        }
        else{
            $result = true
        }
        return $result;
    }

    private function invalidLname(){
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    public function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }


    private funtion pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }
        else{
            $result = true;
        } return $result;
    }

    private function pwdMatch(){
        $result;
        if(!$this->CheckUser($this->lname. $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}