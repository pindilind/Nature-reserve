<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR CHOOSEN ANIMALS</title>
</head>

<body>
    <?php

    abstract class Animal {

        public $name;
        public $img;

        public function showImg() {
            echo "<img style=max-width:200px;' src='" . $this->img . "' onClick='" . $this->click() . "'/><br>";
        }

        function click() {
            $text = 'alert("';
            $text .= $this->name;
            $text .= ": ";
            $text .= $this->makeSound();
            $text .= '");';
            return $text;
        }

        abstract function makeSound();
    }

    abstract class Plant {

        public $name;
        public $img;

        public function showImg() {
            echo "<img style=max-width:100px;' src='" . $this->img . "'/><br>";
        }
    }



    class coconut extends Plant {
        function __construct($name, $img)
        {

            $this->name = $name;
            $this->img = "./coconut.png";
        }
    }


    class monkey extends Animal {
        function __construct($name, $img) {

            $this->name = $name;
            $this->img = "./monkey.png";
        }

        function makeSound() {
            return "Woahaha";
        }
    }


    class giraffe extends Animal {
        function __construct($name, $img) {

            $this->name = $name;
            $this->img = "./giraffe.png";
        }

        function makeSound() {
            return "Amnam";
        }
    }

    class tiger extends Animal {
        function __construct($name, $img) {

            $this->name = $name;
            $this->img = "./tiger.png";
        }
        function makeSound() {
            return "Raaoowr";
        }
    }

    $coconut = $_POST["coconut"];
    for ($i = 0; $i < $coconut; $i++) {

        $coconutObject = new coconut("Coco", $img);
        echo $coconutObject->name;
        echo $coconutObject->showImg();
    };

    $monkey = $_POST["monkey"];
    for ($i = 0; $i < $monkey; $i++) {
        
        $rawData = file_get_contents("https://randomuser.me/api/");
                        
        $name = json_decode($rawData)->results[0]->name->first;

        $monkeyObject = new monkey($name, $img);
        echo $monkeyObject->showImg();
        
    };

    $giraffe = $_POST["giraffe"];
    for ($i = 0; $i < $giraffe; $i++) {
        
        $rawData = file_get_contents("https://randomuser.me/api/");
                        
        $name = json_decode($rawData)->results[0]->name->first;

        $giraffeObject = new giraffe($name, $img);
        echo $giraffeObject->showImg();
        
    };
    

    $tiger = $_POST["tiger"];
    for ($i = 0; $i < $monkey; $i++) {
        
        $rawData = file_get_contents("https://randomuser.me/api/");
                        
        $name = json_decode($rawData)->results[0]->name->first;

        $tigerObject = new tiger($name, $img);
        echo $tigerObject->showImg();
        
    };


    ?>

</body>

</html>