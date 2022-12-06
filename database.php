<?php

require_once("env.php");


//aliohjelma, jonka avulla otetaan yhteys tietokantaan
function luoTietokantaYhteys() {
    global $DB_USERNAME, $DB_PASSWORD;
    try{
        $conn = new PDO("mysql:host=mysql.cc.puv.fi;dbname=e1900918_koodausosio;charset=utf8mb4",
        $DB_USERNAME,$DB_PASSWORD);

        return $conn;
    }
    catch(PDOException $exc){
        var_dump($exc);
    }
}
// haetaan viestit tietokannasta
function muodostaViestiHaku(){
    return "SELECT * FROM posts order by created ASC";
}


?>