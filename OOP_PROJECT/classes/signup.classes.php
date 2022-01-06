<?php

class SignUp extends Dbh{
    protected function setUser($lname, $pwd, $email){
       $stmt = $this->connect()->prepare('INSERT INTO users (lname, email) VALUES (?, ?, ?);');

       $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

       
    if(!stmt->execute(array($lname, $hashedPwd, $email))){
        $stmt = null;
        header('location: ../index.php?error=stmtfailed');
        exit();
    }
    $stmt = null;
    }

    protected function checkUser($lname, $email){
        $stmt = $this->connect()->prepare('SELECT fname from users WHERE lname = ? OR email = ?;');
 
        
        if(!stmt->execute(array($lname, $email))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
    
        return $resultCheck;
    }















}