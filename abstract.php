<?php
    abstract class Person{
        protected $firstname;
        protected $lastname;

        public function __construct($firstname,$lastname){
            $this-> firstname = $firstname;
            $this-> lastname = $lastname;
        }
        public function __toString()
        {
            return sprintf("%s, %s", $this->lastname, $this-> firstname);
        }
        abstract public function getSalary();
    }
    class Employee extends Person{
        public $salary;
        public function __construct($firstname, $lastname, $salary)
        {
            parent::__construct($firstname, $lastname);
            $this ->salary = $salary;
        }
        public function getSalary(){
            return sprintf ("%s", $this->salary);  //return salary
        }
    }
$e = new Employee('nam','hai',4000);
echo $e;

?>