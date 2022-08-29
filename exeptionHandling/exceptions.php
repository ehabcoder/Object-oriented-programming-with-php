<?php

// class fuelEconomy {
//
//   public function calculate($distance, $gas)
//   {
//     if($gas <= 0)
//     {
//       // Throw custom error message, instead of an error
//       throw new Exception("The gas consumption can't be less than or equal to zero.");
//     }
//     return $distance/$gas;
//   }
//
// }
// class fuelEconomy {
// // Calculate the fuel efficiency
//     public function calculate($distance, $gas)
//     {
//         if($gas <= 0 )
//         {
//         // Throw custom error message, instead of an error
//         throw new Exception("The gas consumption cannot be less than
//         or equal to zero. You better drink coffee or take a break.");
//         }
//     return $distance/$gas;
//     }
// }
//class fuelEconomy {
//   public function calculate($distance, $gas)
//   {
//     if($gas <= 0) {
//       throw new Exeption("Sorry gas can't be less than or equall zero.");
//     }
//     return $distance/$gas;
//   }
// }
//
// $dataFromCars = array(
// array(50,10),
// array(50,0),
// array(50,-3),
// array(30,5)
// );
//
// foreach($dataFromCars as $data => $value) {
//   try
//   {
//     $fuel = new fuelEconomy();
//     echo $fuel->calculate($value[0], $value[1]) . "<br>";
//   }
//   catch(Exeption $e)
//   {
//     echo "Message: " . $e->getMessage(). "<br/>";
//  }
// }




/* foreach($dataFromCars as $data => $value)
 {
 $fuelEconomy = new FuelEconomy();
 echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
 }
*/
/*class FuelEconomy {
// Calculate the fuel efficiency
public function calculate($distance, $gas)
{
if($gas <= 0 )
{
// Throw custom error message, instead of an error
throw new Exception("The gas consumption cannot be less than
or equal to zero. You better drink coffee or take a break.");
}
return $distance/$gas;
}
}
// The data to feed the class with
$dataFromCars = array(
array(50,10),
array(50,0),
array(50,-3),
array(30,5)
);
// Create the object from the class and feed it
// with the array values
foreach($dataFromCars as $data => $value)
{
// Try block handles the normal data
try
{
$fuelEconomy = new FuelEconomy();
echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
}
// Catch block handles the exceptions
catch (Exception $e)
{
// Echo the custom error message
echo "Message: " . $e -> getMessage() . "<br />";
}
}*/

class fuelEconomy {
  public function calculate($distace, $gas)
  {
    if($gas<=0) {
      throw new exception("Sorry! The age can't be less than or equal ZERO ^_^ ");
    }
    return $distace/$gas.'<br>';
  }
}

$arr = array(
    array(50,10),
    array(50,0),
    array(50,-20),
    array(100,10)
);

foreach($arr as $data => $values) {
  $fuel = new fuelEconomy();
  try
  {
    echo $fuel->calculate($values[0], $values[1]);
  }
  catch(exception $e)
  {
    // echo "ERROR! " . $e->getMessage() . ' in the file ' . $e->getFile() . ' and in the line ' . $e->getLine() .'<br>';
    // echo '<br>' '<br>' '<br>';
    echo "Message: " . $e -> getMessage() . "<br />";
    echo "<hr />";
    // Write the error into a log file
    error_log($e -> getMessage());
    error_log($e -> getFile());
    error_log($e -> getLine());
  }
}
