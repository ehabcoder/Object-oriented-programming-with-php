<?php
/// how to :
  /*class utilis {
    static public $numCars =0;
    static public function addToCars($int)
    {
        $int = (int)$int;
        self::$numCars += $int;
    }
  }
  echo utilis::$numCars . "<br>";
  utilis::addToCars(3);
  echo utilis::$numCars . "<br>";
  utilis::addToCars(-1);
  echo utilis::$numCars;
 */

 /// Use Case 1: as counter :
    /*class utilis {
      // Hold the number of cars
      static public $numberOfcars = 0;
      //Add 1 to the number of car each time the method is called
      static public function add1ToCars() {
        self::$numberOfcars += 1;
      }
    }
    echo utilis::$numberOfcars . "<br>";
    utilis::add1ToCars();
    echo utilis::$numberOfcars . "<br>";
    utilis::add1ToCars();
    echo utilis::$numberOfcars . "<br>";
    */

/// Use case 2: for utility classes
/*class Utilis{

    // The method uses PHP's header function
    // to redirect the user
    static public function redirect($url) {
      header("Location: $url");
      exit;
    }
}


Utilis::redirect("https://www.google.com");
*/


  class Foo {
    public static function aStaticMethod() {
      $var = 'this';
      var_dump($var);echo "<br>";
    }

    public function aNonStaticMethod() {
      var_dump($this);
    }
}

Foo::aStaticMethod();
$object = new foo();
$object-> aNonStaticMethod();
?>
