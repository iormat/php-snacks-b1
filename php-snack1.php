<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- php -->
    <?php 
        // array of matches
        $matches = [
            [
                "home" => "Squadra di casa",
                "guest" => "Squadra Sfidante",
                "homePoints" => 50,
                "guestPoints" => 60
            ],
            [
                "home" => "Squadra di casa",
                "guest" => "Squadra Sfidante",
                "homePoints" => 35,
                "guestPoints" => 80
            ],
            [
                "home" => "Squadra di casa",
                "guest" => "Squadra Sfidante",
                "homePoints" => 78,
                "guestPoints" => 75
            ],
        ];

        // cycle to get info from array
        for($i = 0; $i < count($matches); $i++) {
            $key = $matches[$i];
            echo "<h3>" . $key['home'] . " - " . $key['guest'] . "</h3>";
            echo "<span>" . $key['homePoints'] . " - " . $key['guestPoints'] . "</span>";
        }
    ?>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!-- creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema. -->