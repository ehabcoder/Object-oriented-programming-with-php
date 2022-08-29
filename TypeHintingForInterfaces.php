<?php 

//Why type hinting for objects may not be sufficient?
/*class Bmw {
    
    protected $model, $rib, $hight;
    
    public function __construct($model, $rib, $height)
    {
        $this -> model = $model;
        $this -> rib = $rib;
        $this -> height = $height;
    }
    
    // Calculate the tank volume for rectangular tanks
    public function calcTankVolume()
    {
        return $this->rib * $this->rib * $this->height; 
    }
    
}

function calcTankPrice(Bmw $bmw, $pricePerGalon)
{
    return $bmw->calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
}

//$bmw1 = new Bmw('62182791', 14, 21);
//echo calcTankPrice($bmw1, 3);



//Type hinting for interfaces

class Mercedes {
    protected $model;
    protected $radius;
    protected $height;
    
    public function __construct($model, $radius, $height)
    {
        $this -> model = $model;
        $this -> radius = $radius;
        $this -> height = $height;
    }
    
    // Calculate the volume of cylinders
    public function calcTankVolume()
    {
        return $this -> radius * $this -> radius * pi() * $this -> height;
    }
}

$mer1 = new Mercedes('12189796', 7, 28);
echo calcTankPrice($mer1, 3);*/


/*abstract class car {
    protected $model;
    protected $height;
    
    abstract public function calcTankVolume();
}

class Bmw extends car {
    protected $rib;
    public function __construct($model, $rib, $height)
    {
       $this->hight = $height;
       $this->rib = $rib;
       $this->model = $model;
    }
    
    public function calcTankVolume()
    {
        return $this->rib * $this->rib * $this->hight;
    }
}

class mercedes extends car {
    protected $radius;
    
    public function __construct($model, $radius, $height)
    {
        $this->height = $height;
        $this->radius = $radius;
        $this->model = $model;
    }
    
    // Calculates the volume of cylinder
    public function calcTankVolume()
    {
        return $this -> radius * $this -> radius * pi() * $this -> height;
    }
    
}

function calcTankPrice(car $car1, $pricePerGallone) {
    echo $car1 -> calcTankVolume() * 0.0043290 * $pricePerGallone . "$";
}


$bmw1 = new Bmw('62182791', 14, 21);
echo calcTankPrice($bmw1, 3);
echo "<br>";
$mercedes1 = new mercedes('12189796', 7, 28);
echo calcTankPrice($mercedes1, 3);*/

abstract class User {
    protected $username;
    protected $gender;
   
    public function __construct() {
        ;
    }
}


class commentator extends User {
    public function add($user, $gender) {
        $this->username = $user;
        $this->gender = $gender;
    }
}

$commentator1 = new commentator();
$commentator1->add("Jane", "mrs");

$commentator2 = new commentator();
$commentator2->add("Bob, "mr")
































