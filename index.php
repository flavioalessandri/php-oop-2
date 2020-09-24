<?php

/* definire classe Square e classe Cube ;
definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto */



class Square {
  public $side;

  public function __construct($side){
    // controllo s
    $this -> setSide($side);

  }

  public function setSide($side){
    if (is_int($side) == true ){
      return $this -> side = $side;
    } else{
      return $this -> side =  "<span style='color:red;'> ERROR </span>";
    }
  }

  public function getPer(){
    return ($this-> side)*4 ;
  }

  public function getArea(){
    return ($this-> side)*($this -> side);
  }

    public function __toString(){
      return
            "<h4 style='color:orange;'> ---- SQUARE ------- </h4> "
            . "<strong> Square side </strong> : " . $this -> side  ."<br>"
            . "<strong> Square Perimeter </strong>: " . $this -> getPer() . "<br>"
            . "<strong> Square Area </strong> : " . $this -> getArea() . "<br>";
    }

}


class Cube extends Square {

  public function getSurf(){
    return $this -> getArea() *6;
  }

  public function getVol(){
    return $this -> getArea() * ($this-> side);
  }

  // Versione Polimorfica
  // public function getArea(){
  //   return parent::getArea() * ($this-> side);
  // }

  public function __toString(){
    return
    "<h4 style='color:lightblue;'> ---- CUBE ------- </h4>"
    . "<strong> Cube side </strong> : " . $this -> side  ."<br>"
    . "<strong> Cube Surface </strong> : " . $this -> getSurf() . "<br>"
    . "<strong> Cube Volume </strong> : " . $this -> getVol() . "<br>";
  }
}

$sq1 = new Square(2);
$sq1 -> setSide(10);

$sq2 = new Square(5);

$sq3 = new Square(12);

$sq4 = new Square("string");




$cub1 = new Cube(2);
$cub1 -> setSide(20);

$cub2 = new Cube(9);

$cub3 = new Cube("a");

?>

<div class="container" style="width:100%;">

  <div class="result" style="width:200px; margin-left:auto ; margin-right:auto ;">


 <?php

echo $sq1 . "<br>"
   . $sq2 . "<br>"
   . $sq3 . "<br>"
   . $sq4 . "<br>". "<br>"
   . $cub1 . "<br>"
   . $cub2 . "<br>"
   . $cub3 . "<br>";

   ?>
   </div>

</div>
