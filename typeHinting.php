<?php 

    //array type hinting
function calc(array $speeds) {
    foreach($speeds as $iteme){
        $model = $iteme[0];
        echo $model . " : ";
        $speed = $iteme[1] * $iteme[2] . "<br>";
        echo $speed;
        
    }}
    
    $models = array(
        array("Toyota", 5, 10),
        array("Honda", 6, 5)
    );
    
    
    //object type hinting
    class car {
        protected $driver;
        public function __construct(driver $driver){
            $this->driver = $driver;
        }
    }
    
    class driver {
        public function __construct($name){
            
        }
    }
    
    $driver1 = new driver("Ehab");
    $car1 = new car($driver1);
    
   
    
    //Does PHP support type hinting to basic data types?
    class cas{
        protected $model;
        protected $hasSunRoof;
        protected $numOfDoors;
        protected $price;
        
        public function setModel(string $model){
            $this->model = $model;
        }
 
        
        
    }



















    