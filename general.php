<?php
header('Content-Type: text/html; charset=utf-8');

// vaaditaan database.php tiedosto, jotta voidaan käyttää sen funktioita
require("database.php");
?>

<html>
<head>
    <title>Foorumi</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="app.css">
</head>

<body>

<h1>Yleinen keskustelu</h1>


<?php
    // lisätään viesti tietokantaan sekä foorumille
    echo '<h3><a href="lisaa_viesti.php">Lisää viesti</a></h3>'; 
?>
<div>
    <table>
        <tr>
            <th>Aihe</th>
            <th>Pvm</th>
            <th>Kommentoija</th>
        </tr>

<?php
    try{
        // otetaan yhteys tietokantaan
        $conn = luoTietokantaYhteys();

        $lause = muodostaViestiHaku();
        $stmt = $conn->prepare($lause);

        $stmt->execute();
        $data = $stmt->fetchAll(); // array [][]muotoisena

        // näytetään viestin otsikko, luomispäivä ja viesti 
        foreach($data as $row){
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<br/> <td>" . $row["created"] . "</td>";
            echo "<br/> <td>" . $row["user"] . "</td>";
            echo "</tr>";
            echo '<tr><td><input class="col1" type="text" readonly value="'.$row["message"].'" ></td>';
            echo "<br/> <td> <a href='muokkaa.php?id=" . $row["post_id"] . "'>Muokkaa</a></td>";
            echo "</tr>";
        
        }

    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

?>        
    </table>
</div>
</body>
</html>