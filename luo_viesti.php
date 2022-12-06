<?php

require_once("database.php");

$message =  $_REQUEST['message'];
$name = $_REQUEST['name'];
$user =  $_REQUEST['user'];
$today = date("Y/m/d");

try{

    $conn = luoTietokantaYhteys();
    // lähetetään tiedot tietokantaan
    $lause = "INSERT INTO posts (`post_id`,`message`, `name`,`created`, `user`) VALUES (DEFAULT, '$message', '$name', '$today', '$user')";
    echo $lause;                                                                       
    $stmt = $conn->prepare($lause);
    
    $stmt->execute();


    //ohjataan käyttäjä takaisin viimeksi lukemaan foorumiin
    header('Location: general.php');
    exit;  


}
catch(PDOException $e){
    echo $e->getMessage();
}

