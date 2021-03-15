<?php
  //Class is the model of a structure that contain atributes and methods.
  //Objects are instances of this class.

  //Ex:

  class Name{
      public $firstName;
      public $lastName;

      public function setName($name){
        $this->firstName = $name;
      }
      //This is a simple class example.
  }


  //Object is a instance of this class.
  //Ex

  $NameOBJ = new Name; // NameOBJ is now an object.
?>