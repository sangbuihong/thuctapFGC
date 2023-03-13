<?php

use Pet as GlobalPet;

    class Pet{
        public $name;
        function __construct($pet_name)
        {
            $this->name = $pet_name;
        }
        function eat(){
            echo "$this->name is eating";
        }
        function play(){
            echo "$this->name is playing";
        }
    }
    class Cat extends Pet {
        protected $age;
        function __construct(string $pet_name, int $age)
        {
            parent:: __construct($pet_name);
            $this->age = $age;
        }
        function play(){
            parent::play();
            echo "$this->name is climbing and it 's $this->age year old.";
        }
    }
    $cat = new Cat("Luna", 5);
    $cat->play();
?>