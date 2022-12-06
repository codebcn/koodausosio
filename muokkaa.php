<?php
header('Content-Type: text/html; charset=utf-8');
// id pyyntö URL-osoitteesta
$id = $_GET['id'];

?>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    </head>
    <body>

    <h1>Muokkaa kommenttia</h1>

    <form method="POST" action="update.php">
        <!-- lähetä id update.php sivustolle -->
        <input type="hidden" name="post_id" value="<?php echo $id; ?>" />
        <p><input placeholder="Kommentti" type="text" name="message" required></p>
        <p><button type="submit">Muokkaa</button</p>
    </form>
</body>
</html>

