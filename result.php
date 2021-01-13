<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR CHOOSEN ANIMALS</title>
</head>

<body>
    <?php


    require("./animal.php");

    $newAnimal = new Animal($_POST["coconut"], $_POST["monkey"], $_POST["giraffe"], $_POST["tiger"]);

    print_r($newAnimal);
   
    ?>
</body>

</html>