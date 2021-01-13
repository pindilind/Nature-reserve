<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR CHOOSEN ANIMALS</title>
</head>

<body>
    <?php

    /* SUPERKLASS = ABSTRACT */
    abstract class Animal {

        function __construct($img, $name) {
            $this->img = $img;
            $this->name = $name;
           
        }

        public $imge;
        public $name;
        
    };

    abstract class makeSound {

    }


    class coconut extends Animal {
        function __construct($name) {
           
        }
    }

   class monkey extends Animal {
        function __construct($name) {

        }
    }

    class giraffe extends Animal {
        function __construct($name) {

        }
    }

    class tiger extends Animal {
        function __construct($name) {
            
            
        }
    }

    ?>
</body>

</html>