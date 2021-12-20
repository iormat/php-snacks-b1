<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <style>
        * {
            text-align: center;
        }
        input {
            display: block;
            margin: .5rem auto;
        }
    </style>
    <!-- php -->
    <?php
        //check name length
        function checkLength() {
            if(strlen($_GET['name']) >= 3) {
                return true;
            }
        }
        // check if age input is a number
        function checkAge() {
            if(intval($_GET['age'])) {
                return true;
            }
        }
        // check if mail has at and dot
        function checkMail() {
            if(strpos($_GET['mail'], "@") && strpos($_GET['mail'], ".")) {
                return true;
            }
        }
        // start check
        if($_GET !== []) {
            $userName = checkLength();
            $userAge = checkAge();
            $userMail = checkMail();
        }
        // results
        if($userName && $userAge && $userMail) {
            echo "Accesso riuscito";
        }else {
            echo "Accesso Negato";
        }
    ?>
    <title>Document</title>
</head>
<body>

    <form action="php-snack2.php">
        <input type="text" placeholder="Inserisci il tuo nome" name="name" required>
        <input type="text" placeholder="Inserisci la tua età" name="age" required>
        <input type="text" placeholder="Inserisci la tua mail" name="mail" required>
        <button>invia form</button>
    </form> 

</body>
</html>


<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->