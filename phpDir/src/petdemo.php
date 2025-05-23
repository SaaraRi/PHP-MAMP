<?php
class Pet
{
    public $name; // Property
    public $age;

    //Constructor: sets up the pet when created
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Method: what the pet can do
    public function sayHello()
    {
        echo "Hi, I'm $this->name, and I'm $this->age years old\n";
    }
}

$myPet = new Pet("Rishu", 5);
$myPet->sayHello();

$SaarasPet = new Pet("Nenä", 12);
$SaarasPet->sayHello();


class Pet
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function sayHello()
    {
        echo "Hello from $this->name\n";
    }
}

class Dog extends Pet
{
    public function bark()
    {
        echo "$this->name says: Woof!\n";
    }
}

class Cat extends Pet
{
    public function purr()
    {
        echo "$this->name says: Purr!\n";
    }
}

$dog = new Dog("Rhishu");
$dog->sayHello();
$dog->bark();

$cat = new Cat("Mittens");
$cat->sayHello();
$cat->purr();
