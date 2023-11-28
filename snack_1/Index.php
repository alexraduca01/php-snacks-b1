<?php 

$games = [
    [
        "home" => "inter",
        "away" => "milan",
        "homePoints" => 5,
        "awayPoints" => 1,
    ],
    [
        "home" => "roma",
        "away" => "lazio",
        "homePoints" => 2,
        "awayPoints" => 1,
    ],
    [
        "home" => "juventus",
        "away" => "napoli",
        "homePoints" => 3,
        "awayPoints" => 3,
    ],
    [
        "home" => "atalanta",
        "away" => "fiorentina",
        "homePoints" => 4,
        "awayPoints" => 5,
    ]
]

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="d-flex mt-5 justify-content-center align-items-center fs-1">
            <ul class="list-unstyled">
                <?php 
                foreach ($games as $key => $value) {
                    echo "<li> {$value['home']} - {$value['away']} {$value['homePoints']} / {$value['awayPoints']} </li>";
                ?>
                <?php } ?>
            </ul>
        </div>
    </body>

</html>