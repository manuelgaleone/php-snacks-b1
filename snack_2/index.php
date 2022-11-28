<?php
/*
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) < 3 and !str_contains($mail, '.', '@') and !is_numeric($age)) {
    echo "ACCESSO NON RIUSCITO";
} else {
    echo "ACCESSO RIUSCITO";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <form action="index.php" method="get">
        <div class="input_texts">
            <input type="text" name="name" id="name" placeholder="Inserisci il Nome">
            <input type="text" name="mail" id="mail" placeholder="Inserisci la tua Mail">
            <input type="number" name="age" id="age" placeholder="Inserisci la tua Età">
            <button type="submit">Accedi</button>
        </div>
        <h1>
            <?php echo $access; ?>
        </h1>
    </form>
</body>

</html>