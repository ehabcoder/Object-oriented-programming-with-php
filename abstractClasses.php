<?php
abstract class car {
    protected $tankVolume;

    public function setTankVolume($volume) {
        $this -> tankVolume = $volume;
    }

    abstract public function calcNumMilesOnFullTank();
}

class Honda extends car {
    public function calcNumMilesOnFullTank() {
        $miles = $this->tankVolume*30;
        return $miles;
    }
}

class Toyota extends car {
    public function calcNumMilesOnFullTank()
    {
        // TODO: Implement calcNumMilesOnFullTank() method.
        return $this->tankVolume * 33;
    }

    public function getColor() {
        return "beige";
    }
}

$toyota1 = new Toyota();
$toyota1 -> setTankVolume("10");
echo $toyota1->getColor();
echo $toyota1->calcNumMilesOnFullTank();*/

abstract class user {
    protected $username;

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($user) {
        $this->username = $user;
    }

    abstract public function stateYourRole() ;

}

class admin extends user {
    public function stateYourRole()
    {
        // TODO: Implement stateYourRole() method.
        return "admin";
    }
}

class viewer extends user {
    public function stateYourRole()
    {
        // TODO: Implement stateYourRole() method.

    }
}
$ad = new admin();
$ad->setUsername("Balthazar");
echo $ad->stateYourRole();*/

 interface car {
   public function setModel($name);
   public function getModel();

}

interface vehicle {
   public function setHasWheels($bool);
   public function getHasWheels();
}

class miniCor implements car, vehicle {
   private $model;
   private $hasWheels;

   public function setModel($name)
   {
       // TODO: Implement setModel() method.
        $this->model = $name;
   }
   public function getModel()
   {
       // TODO: Implement getModel() method.
        return $this->model;
   }

   public function setHasWheels($bool)
   {
       // TODO: Implement setHasWheels() method.
        $this->hasWheels = $bool;
   }

   public function getHasWheels()
   {
       // TODO: Implement getHasWheels() method.
        return ($this->hasWheels)? "has wheels" : "no wheels";
   }
}

class miniCar implements car {
   private $model;

   public function setModel($name)
   {
       // TODO: Implement setModel() method.
        $this->model = $name;

   }

   public function getModel()
   {
       // TODO: Implement getModel() method.
        return $this->model;
   }
}
