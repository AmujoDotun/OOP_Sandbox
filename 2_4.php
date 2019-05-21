<?php

class User{
    public $name;
    public $age;

    public function __construct($name, $age){
       $this->name =$name;
       $this->age = $age;
    }

    public function sayHello(){
        return $this->name ." is ". $this->age . " years old";
    }

    public function __destruct(){
       echo "<br>";
        echo "yes I no am to put a stop to this";
    }
}

$user = new User("Dotun", 22);
echo $user->sayHello();

echo "<br>";

$user1 = new User("Samuel", 20);
echo $user1->sayHello();
?>