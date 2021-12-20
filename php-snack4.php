<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- php -->
    <?php
        // empty array to populate
        $randNumArr = [];
        // while array has less than 15 values
        while(count($randNumArr) < 15) {
            $number = rand(1, 15);
            // avoid duplicated numbers
            if(!in_array($number, $randNumArr)) {
                $randNumArr[] = $number;
            }
        }
    ?>
    <title>Document</title>
</head>
<body>
        <h1><?php echo var_dump($randNumArr)?></h1>
</body>
</html>


<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->