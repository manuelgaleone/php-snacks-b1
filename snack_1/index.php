<?php
/*
Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        "home" => "Roma",
        "guest" => "Pisa",
        "home_pt" => "11",
        "guest_pt" => "21"
    ],
    [
        "home" => "Pisa",
        "guest" => "Milano",
        "home_pt" => "21",
        "guest_pt" => "23"
    ],
    [
        "home" => "Ancona",
        "guest" => "Parigi",
        "home_pt" => "25",
        "guest_pt" => "20"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match) : ?>
            <li> <?php echo $match["home"] . " - " . $match["guest"] . " | " . $match["home_pt"] . " - " . $match["guest_pt"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>