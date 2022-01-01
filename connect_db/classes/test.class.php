<?php

class Test extends Dbh {
    public function getUsers() {
        $sql = "SELECT * FROM contact";
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()){
            echo $row['subject'] . '<br>';
        }
    }


    public function getUsersStat($firstname, $email){
        $sql = "SELECT * FROM contact WHERE firstName = ? AND email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $email]);
        $names = $stmt->fetchAll();
        
        foreach ($names as $name){
            echo $name['email'] . '<br>';
        }


    }

}

?>