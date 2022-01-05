<?php

    class Dbh {
        private function connect(){
            try {
                $username = 'root';
                $password = '';
                $dbh = new PDO('mysqli:host=localhost;dbname=?', $username, $password);
                return $dbh;
            } catch (PDOEXception $e) {
                print "Oops, " . $e->getMessage() . "<br>";
                die();
            }
        }
    }