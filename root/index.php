<?php

require "src/Car/carIntro.php";
require "src/Car/carPrice.php";



$car = new car\carIntro();
echo $car->sayHello(). "<br>";

$carPrice = new price\carPrice();
echo $carPrice->getQuote();
