<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        $students = [
            "Jane Doe" => [
                5, 7, 4, 10
            ],
            "John Doe" => [
                9, 9, 9, 9
            ],
            "Daniel Doe" => [
                4, 5, 2, 3
            ],
        ];

        foreach ($students as $student => $votes) {
            echo "<h2>" . $student . "</h2>";
            foreach($votes as $vote) {
                $average = array_sum($votes) / count($votes);
            }
            echo "<p>" . $average . "</p>";
        }
    ?>

    <title>Document</title>
</head>
<body>
    
</body>
</html>


<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->