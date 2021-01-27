<?php

session_start();
print_r($_SESSION);

if (isset($_SERVER["REQUEST_METHOD"])) {
    echo $_SERVER["REQUEST_METHOD"];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $coconut = $_POST["coconut"];
        $monkey = $_POST["monkey"];
        $giraffe = $_POST["giraffe"];
        $tiger = $_POST["tiger"];

        $_SESSION["created"] = true;
        $_SESSION["monkey"] = $monkey;
        $_SESSION["giraffe"] = $giraffe;
        $_SESSION["tiger"] = $tiger;
        $_SESSION["coconut"] = $coconut;
    } elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
        if ($_SESSION["created"]) {
            echo "GET and created isset";
        } else {
            header("Location:settings.php");
        }
    }
}


abstract class Animal
{

    public $name;
    public $img;

    public function showImg()
    {
        echo "<img style=max-width:200px;' src='" . $this->img . "' onClick='" . $this->click() . "'/><br>";
    }

    function click()
    {
        $text = 'alert("';
        $text .= $this->name;
        $text .= ": ";
        $text .= $this->makeSound();
        $text .= '");';
        return $text;
    }

    abstract function makeSound();
}

abstract class Plant
{

    public $name;
    public $img;

    public function showImg()
    {
        echo "<img style=max-width:100px;' src='" . $this->img . "'/><br>";
    }
}



class coconut extends Plant
{
    function __construct($name, $img)
    {

        $this->name = $name;
        $this->img = "./coconut.png";
    }
}


class monkey extends Animal
{
    function __construct($name, $img)
    {

        $this->name = $name;
        $this->img = "./monkey.png";
    }

    function makeSound()
    {
        return "Woahaha";
    }
}


class giraffe extends Animal
{
    function __construct($name, $img)
    {

        $this->name = $name;
        $this->img = "./giraffe.png";
    }

    function makeSound()
    {
        return "Amnam";
    }
}

class tiger extends Animal
{
    function __construct($name, $img)
    {

        $this->name = $name;
        $this->img = "./tiger.png";
    }
    function makeSound()
    {
        return "Raaoowr";
    }
}

$coconut = $_SESSION["coconut"];
for ($i = 0; $i < $coconut; $i++) {

    $coconutObject = new coconut("Coco", $img);
    echo $coconutObject->name;
    echo $coconutObject->showImg();
};

$monkey = $_SESSION["monkey"];
for ($i = 0; $i < $monkey; $i++) {

    $rawData = file_get_contents("https://randomuser.me/api/");

    $name = json_decode($rawData)->results[0]->name->first;

    $monkeyObject = new monkey($name, $img);
    echo $monkeyObject->showImg();
};

$giraffe = $_SESSION["giraffe"];
for ($i = 0; $i < $giraffe; $i++) {

    $rawData = file_get_contents("https://randomuser.me/api/");

    $name = json_decode($rawData)->results[0]->name->first;

    $giraffeObject = new giraffe($name, $img);
    echo $giraffeObject->showImg();
};


$tiger = $_SESSION["tiger"];
for ($i = 0; $i < $tiger; $i++) {

    $rawData = file_get_contents("https://randomuser.me/api/");

    $name = json_decode($rawData)->results[0]->name->first;

    $tigerObject = new tiger($name, $img);
    echo $tigerObject->showImg();
};


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR CHOOSEN ANIMALS</title>
</head>

<body>

    <form action="settings.php" method="POST">
        <input name="remove_session_data" hidden="true" value="yes">
        <input type="submit" value="Ta bort det här naturreservatet">
    </form>

</body>

</html>