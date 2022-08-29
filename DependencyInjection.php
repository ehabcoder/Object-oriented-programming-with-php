<?php
    ///First Approach
  /*class humanDriver {
    public function sayYourName($name) {
      return $name;
    }
  }

  class robotDriver {
    public function sayYourName($name) {
      return $name;
    }
  }

  class car {
    protected $driver;

    public function __construct($driver){
      $this->driver = $driver;
    }

    public function getDriver() {
      return $this->driver;
    }
  }

  $humanDriver = new humanDriver();
  $car = new car($humanDriver);
  echo $car->getDriver()->sayYourName('ehab') . "<br>";

  $robotDriver = new robotDriver();
  $car = new car($robotDriver);
  echo $car->getDriver()->sayYourName('R2-D2');
*/

  ///Second approach with type hinting:
/*  interface Driver {
    public function sayYourName($name);
  }

  class Robot implements Driver {
    public function sayYourName($name) {
      return $name;
    }
  }

  class Human implements Driver {
    public function sayYourName($name) {
      return $name;
    }
  }

  class car {
    protected $driver;
    public function __construct(Driver $driver) {
      $this->driver = $driver;
    }
    public function getDriver() {
      return $this->driver;
    }
  }

  $humanDriver = new Human();
  $car1 = new car($humanDriver);
  echo $car1->getDriver()->sayYourName('Ehab');

  $robot = new Robot();
  $car2 = new car($robot);
  echo '<br>' . $car2->getDriver()->sayYourName('KJ');
*/

    /// How to make a dependency injection through a setter method?
  /*interface Driver {
      public function sayYourName($name);
  }

  class Human implements Driver {
      public function sayYourName($name) {
        return $name;
      }
  }

  class Car {
    protected $driver;
    public function serDriver(Driver $driver) {
      $this->driver = $driver;
    }
    public function getDriver() {
      return $this->driver;
    }
  }

  $human = new Human();
  $car = new car();
  $car->serDriver($human);
  echo $car->getDriver()->sayYourName('Ehab');
*/


    /// Let’s practice what we’ve just learned:



  class Article {
    protected $title;
    protected $author;
    public function __construct($title, $author) {
      $this->author = $author;
      $this->title = $title;}
      public function getTitle() {
        return $this->title;
      }
      public function getAutor(){
        return $this->author;
      }
    }

  class author {
    protected $name;
    public function setName($name) {
      $this->name = $name;
    }
    public function getName() {
      return $this->name;
    }
  }
  $author1 = new author();
  $author1->setName('Joe');
  $article1 = new Article('to php and beyond', $author1);
   echo $article1->getTitle() . " by " . $article1->getAutor()->getName();
