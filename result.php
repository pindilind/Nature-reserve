<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR CHOOSEN ANIMALS</title>
</head>

<body>
<?php

    class Animal {
        function __construct($name, $img) {

            $this->name = $name;
            $this->img = $img;
        }

        public $name;
        public $img;
    };


    class monkey extends Animal {
        function __construct($name, $img) { 

            parent::__construct($name, $img);
            $this->name = $name;
            $this->img = "./monkey.png";
        }

        public $name;
        public $img;
    }


    class giraffe extends Animal {
        function __construct($name, $img) {
            parent::__construct($name, $img);

            $this->name = $name;
            $this->img = "./giraffe.png";
        }
        public $name;
        public $img;
    }

    class tiger extends Animal {
        function __construct($name, $img) {
            parent::__construct($name, $img);

            $this->name = $name;
            $this->img = "./tiger.png";
        }
        public $name;
        public $img;
    }

    
    $monkey = $_POST["monkey"];
    for ( $i=0; $i < $monkey; $i++) { 
        echo "skapa apa";
    }


    $newAnimal = new Animal($_POST["name"], $_POST["img"]);
    /*  $newFruit = new Fruit($_POST["coconut"]);*/
    print_r($newAnimal);
    echo '<br>';
    /* print_r($newFruit) */


?>

</body>

</html>