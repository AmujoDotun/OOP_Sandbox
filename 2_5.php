<?php

class User{
    protected $name;
    protected $age;

    public function __construct($name, $age){
        $this->name =$name;
        $this->age = $age;
    }
}

class Customer extends User{
    
   private $balance;

   public function __construct($name, $age, $balance){
       Parent::__construct($name, $age);
       $this->balance =$balance;
   }

    public function getData($amount){
        return $this->name . " paid $" . $amount;
        
    }

    public function getBalance(){
        return $this->balance;
    }
}

$customer = new Customer("Dotun", 22, 500);
echo $customer->getData( 100);
echo $customer->getBalance();

?>