<?php
$matches = [
    [
        "home" => "Alba Berlino",
        "away" => "Valencia",
        "home_points" => 100,
        "away_points" => 70
    ],
    [
        "home" => "Fenerbahçe",
        "away" => "Stella Rossa",
        "home_points" => 90,
        "away_points" => 120
    ],
    [
        "home" => "Olimpia Milano",
        "away" => "Barcellona",
        "home_points" => 84,
        "away_points" => 92
    ],
    [
        "home" => "Bayern Monaco",
        "away" => "CSKA Mosca",
        "home_points" => 110,
        "away_points" => 100
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Euroleague Matches</title>
    </head>
    <body>
        <h1>Matches of the week</h1>
        <ul> 
            <li>
                <?php 
                    echo $matches[0]["home"] . " - " . $matches[0]["away"] . " | " . $matches[0]["home_points"] . " - " . $matches[0]["away_points"];
                ?>
            </li>
            <li>
                <?php
                    echo $matches[1]["home"] . " - " . $matches[1]["away"] . " | " . $matches[1]["home_points"] . " - " . $matches[1]["away_points"];
                ?>
            </li>
            <li>
                <?php
                    echo $matches[2]["home"] . " - " . $matches[2]["away"] . " | " . $matches[2]["home_points"] . " - " . $matches[2]["away_points"];
                ?>
            </li>
            <li>
                <?php
                    echo $matches[3]["home"] . " - " . $matches[3]["away"] . " | " . $matches[3]["home_points"] . " - " . $matches[3]["away_points"];
                ?>
            </li>
        </ul>

    </body>
</html>
