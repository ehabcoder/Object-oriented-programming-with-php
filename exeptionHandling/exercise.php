<?php

class User {
  private $name;
  private $age;

  public function setName($name)
  {

      if(strlen($name)<3) {
        throw new Exception("Sorry! the name can't be less than 3 characters.");
      }
      // Trim the white spaces
      $name = trim($name);
      $this->name = $name;
  }

  public function setAge($age)
  {

      if($age<=0) {
        throw new Exception("Sorry! Age can't be less than or equal ZERO.");
      }

      // Cast into an integer type
      $age = (int)$age;
      $this -> age = $age;
  }

  public function getName()
  {
      return $this -> name;
  }

  public function getAge()
  {
      return $this -> age;
  }

}

$dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
);

foreach($dataForUsers as $data=>$values) {
  $newUser = new user();
  try
  {
    $newUser->setName($values[0]); $newUser->setAge($values[1]);
    echo "the user name is " . $newUser->getName() . " and his age is " . $newUser->getAge();
  }
  catch(Exception $e) {
    echo $e->getMessage() . '<br>';
  }
}
