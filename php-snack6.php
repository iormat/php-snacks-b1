<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .teacher {
            background-color: grey;
            padding: 5px;
        }
        .student {
            background-color: green;
            padding: 5px;
        }
    </style>

    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

        foreach ($db as $role => $info) {
            foreach ($info as $datas) {
                if($role === 'teachers') {
                   echo '<div class="teacher">' . $datas['name'] . " " . $datas['lastname'] . '</div>';
                }else {
                    echo '<div class="student">' . $datas['name'] . " " . $datas['lastname'] . '</div>';
                }
            }
        }
    ?>

    <title>Document</title>
</head>
<body>
</body>
</html>

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->