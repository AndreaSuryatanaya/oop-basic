<?php

// Method itu function yang ada di dalam class

class Person
{
   // Method
   function sayHello()
   {
      echo "Hallo Selamat Pagi" . PHP_EOL;
   }

   // Static method
   static function sayHoop()
   {
      echo "Hallo Hoop !" . PHP_EOL;
   }
}

// Panggil
// $x = new Person();
// $x->sayHello();

// memanggil static method
Person::sayHoop();


// Inheritance / Pewarisan
// class Anak mewarisi sifat dari Parent
class Andi extends Person {}
Andi::sayHoop();
