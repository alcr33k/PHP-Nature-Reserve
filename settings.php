<?php
if (isset($_SESSION['formSent'])) {
    die();
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="results.php">
        <label for="apor">Apor</label>
        <input type="number" name="apor"> 
        <label for="giraffer">Giraffer</label>
        <input type="number" name="giraffer"> 
        <label for="tigrar">Tigrar</label>
        <input type="number" name="tigrar"> 
        <label for="kokosnötter">Kokosnötter</label>
        <input type="number" name="kokosnötter" placeholder="Antal kokosnötter"> 
        <input type="submit" value="Skapa naturreservat">
    </form>
</body>
</html>
<?php } ?>