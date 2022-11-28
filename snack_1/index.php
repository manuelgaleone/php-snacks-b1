<?php
/*
Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/

$matches = [
    "Olimpia Milano - Roma | 29-30",
    "Pisa - Parma | 21-35",
    "Milano - Pisa | 11-55",
    "Molise - Monteparano | 53-68",
    "Palermo - Catania | 13-94",
    "Pisa - Milano | 21-25",
    "Milano - Palermo | 21-55",
    "Firenze - Santa Lucia | 56-68",
    "Palermo - Catania | 13-94",
    "Molise - Milano | 21-25",
    "Milano - Parma | 21-55",
    "Firenze - San Giorgio | 56-68"
];

echo "Ultime partite giocate: <br>";

foreach ($matches as $match) {

    echo $match . "<br>";
};
