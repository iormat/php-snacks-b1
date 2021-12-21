<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $longLorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque officia inventore ad ut tempora voluptates dolores iure fugit enim, et repellendus id incidunt. Sunt illum eligendi temporibus minus eaque dignissimos dolorum sapiente esse mollitia adipisci. Suscipit dolorem delectus asperiores temporibus.";

        $shortLorem = explode(".", $longLorem);
        for ($i=0; $i < count($shortLorem); $i++) { 
            if($shortLorem[$i] !== "") {
                echo "<p>" . $shortLorem[$i] . ". </p>";
            }
        }
    ?>

    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->