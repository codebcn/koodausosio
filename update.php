<?php

require_once("database.php");

// pyydä $message ja $id, jotta oikea kommentti päivittyy
$message =  $_REQUEST['message'];
$id =  $_REQUEST['post_id'];

try{

    $conn = luoTietokantaYhteys();
    // lähetetään tiedot tietokantaan
    $lause = "UPDATE posts SET message = '$message' WHERE post_id = $id";
    echo $lause;                                                                       
    $stmt = $conn->prepare($lause);
    
    $stmt->execute();
    
    // ohjataan takaisin foorumiin
    header('Location: general.php');
    exit;  


}
catch(PDOException $e){
    echo $e->getMessage();
}

