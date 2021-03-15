<?php
  //Class is the model of a structure that contain atributes and methods.
  //Objects are instances of this class.

  //Ex:

  class Name{
      public $firstName;
      public $lastName;

      public function setFirstName($name){
        $this->firstName = $name;
      }

      public function setLastName($name){
        $this->lastName = $name;
      }

      public function getFullName(){
          return "$this->firstName $this->lastName";
      }
      //This is a simple class example.
  }


  //Object is a instance of this class.
  //Ex

  $NameOBJ = new Name; // NameOBJ is now an object.
  $NameOBJ->setFirstName('Anderson');   
  $NameOBJ->setLastName('Junior');

  echo $NameOBJ->getFullName(); //Will print 'Junior';
?>