<?php
// $name = "dotun";
// echo "hello $name welcome to new era";

//To define a class
class User{
    //properties(attribute)
     public $name;

    //Methods (function)

    public function sayHello(){
        return $this->name ." Says Hello Dude";
    }

}

//Instantiating a user object from a user class

$user1 = new User();
$user1->name = "Dotun";
echo $user1->name;

echo "<br>";
echo $user1->sayHello();

$user2 = new User();
$user2->name = "Tope";
echo $user2->name;
echo "<br>";
echo $user2->sayHello();
?>