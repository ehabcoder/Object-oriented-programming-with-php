<?php
/*
interface shape {
    public function calcArea();   
}

class Circle implements shape {
    private $radius;
    
    public function __construct($rad){
        $this->radius = $rad;
    }
    public function calcArea(){
        return $this->radius * $this->radius * pi();
    }
}

class rectangle implements shape{
    private $w, $h;
    
    public function __construct($width, $height) {
        $this->w = $width;
        $this->h = $height;
    }
    public function calcArea(){
        return $this->w * $this->h;
    }
}
 
$circ = new Circle(3);
$rect = new rectangle(3, 4);
echo $circ -> calcArea();
echo "<br>";
echo $rect -> calcArea();
*/



/*
 * In order to implement the polymorphism principle, we are going to create an abstract User class
 * that commits the classes that inherit from it to calculate the number of scores that a user has
 * depending on the number of articles that he has authored or edited. On the basis of the User class,
 * we are going to create the Author and Editor classes, and both will calculate the number of scores
 * with the method calcScores(), although the calculated value will differ between the two classes.
 */
abstract class user {
    protected $scores = 0, $numOfArticles;
    
    public function setrNumberOfArticles($int){
        $this->numOfArticles = $int;
    }
    public function getNumberOfArticles(){
        return $this->numOfArticles;
    }
    
    abstract public function calcScores();
}

class author extends user {
    public function calcScores() {
       return $this -> numOfArticles * 10 + 20;
    }
}

class editor extends user {
    public function calcScores() {
        return $this->numOfArticles*6+15;
    }
}

$author1 = new author();
$author1->setrNumberOfArticles(8);
echo $author1->calcScores() . "<br>";

$editor1 = new editor();
$editor1 -> setrNumberOfArticles(15);
echo $editor1->calcScores();
