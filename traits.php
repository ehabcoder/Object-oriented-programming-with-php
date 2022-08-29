<?php
  /*trait price {
    public function changePriceByDollars($price, $change)
    {
      return $price + $change;
    }
  }

  trait specialShell {
    public function announceSpecialShell()
    {
      return __CLASS__ . " on special sell";
    }
  };

  class bmw {
    use price;
  }

  class mercedes {
    use price;
    use specialShell;
  }

  $bmw1 = new bmw();
  echo $bmw1->changePriceByDollars(45000, 3000) . "<br>";

  $mercedes1 = new mercedes();
  echo $mercedes1-> changePriceByDollars(42000, -2100) . "<br>";
  echo $mercedes1-> announceSpecialShell();*/


 ///• Traits do not respect the visibility scope, thus allowing a trait’s methods to access private
///   properties and methods in the class that uses them.
/*trait price {
  public function changePriceByDollars($change)
  {
    return $this -> price += $change;
  }
}

class mercedes {
  use price;
  private $price;
  public function __construct($price) {
    $this -> price = $price;
  }
  public function getPrice()
  {
    return $this -> price;
  }
}
$mercedes1 = new mercedes(42000);
echo $mercedes1 -> getPrice() . "<br>";

$mercedes1 -> changePriceByDollars(-2100);
echo $mercedes1->getPrice();*/


/* Coding exercise
In the following exercise, we are going to write a simple program that uses an interface. In it, we are
going to have three classes that inherit from the interface User: Author, Commentator, and Viewer.
Only the first two classes have the need to use a Writing trait.
*/
interface User {

}

class Author implements User {
  use Writing;
  public function writeContent() {
    return "“Author, please start typing an article…”.";
  }
}

class Commentator implements User {
  use Writing;
  public function writeContent() {
    return "Commentator, please start typing your comment…";
  }
}

class Viewer implements User {

}

trait Writing {
  abstract function writeContent();
}

$author1 = new Author();
echo $author1 -> writeContent() . "<br>";
$commentator1 = new Commentator();
echo $commentator1 -> writeContent();
