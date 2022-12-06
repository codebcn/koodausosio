<?php
header('Content-Type: text/html; charset=utf-8');

?>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    </head>
    <body>

    <h1>Lisää viesti</h1>


    <!-- lähettää POST pyynnön tietokantaan luo_viesti.php sivuston kautta -->
    <form method="POST" action="luo_viesti.php">
        <p><input placeholder="Otsikko" type="text" name="name" required></p>
        <p><input placeholder="Kommentti" type="text" name="message" required></p>
        <p><input placeholder="Kommentoija" type="text" name="user" required></p>

        <p><button type="submit">Lähetä</button</p>
    </form>
</body>
</html>