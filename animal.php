<?php 

    /* SUPERKLASS */
    abstract class Animal {

        function __construct($coconut, $monkey, $giraffe, $tiger) {
            $this->coconut = $coconut;
            $this->monkey = $monkey;
            $this->giraffe = $giraffe;
            $this->tiger = $tiger;
        }

        protected $coconut;
        protected $monkey;
        protected $giraffe;
        protected $tiger;
    
    };

    class coconut extends Animal {
        function __construct($coconut, $monkey, $giraffe, $tiger) {
            parent::__construct($coconut, $monkey, $giraffe, $tiger);

        }
    }

   /*  class monkey extends Animal {
        function __construct($coconut, $monkey, $giraffe, $tiger, $name) {

            $this->name = $name
        }
    }

    class giraffe extends Animal {
        function __construct($coconut, $monkey, $giraffe, $tiger, $name) {

            $this->name = $name
        }
    }

    class tiger extends Animal {
        function __construct($coconut, $monkey, $giraffe, $tiger, $name) {
            
            $this->name = $name
        }
    } */

?>