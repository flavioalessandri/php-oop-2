<?php




/* definire classe Square e classe Cube ;
definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto
NOTE:
area quadrato: side * side
perimetro quadrato: 4 * side
volume cubo: side * side * side
superficie cubo: 6 * side * side
N.B.: definire ogni variabile e metodo pubblico */

class Square {
  protected $side;

  public function __construct($side){
    // controllo s
    $this -> setSide($side);

  }

  public function setSide($side){
    if (is_int($side) == true ){
      return $this -> side = $side;
    } else{
      return $this -> side =  "ERROR";
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
            "<strong> ---- SQUARE ------- </strong> "."<br>"
            . "<strong> Square side </strong> :" . $this -> side  ."<br>"
            . "<strong> Square Perimeter </strong>" . $this -> getPer() . "<br>"
            . "<strong> Square Area </strong> :" . $this -> getArea() . "<br>";
    }

}


class Cube extends Square {

  public function __construct($side){
    parent:: __construct($side);
  }

  public function getSurf(){
    return ($this-> side)*6;
  }

  public function getVol(){
    return parent::getArea() * ($this-> side);
  }

  public function __toString(){
    return
    "<strong>-------- CUBE ------ </strong>"."<br>"
    . "<strong> Cube side </strong> :" . $this -> side  ."<br>"
    . "<strong> Cube Surface </strong>" . $this -> getSurf() . "<br>"
    . "<strong> Cube Volume </strong> :" . $this -> getVol() . "<br>";
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







echo $sq1 . "<br>" . $sq2 . "<br>" . $sq3 . "<br>". $sq4 . "<br>". "<br>". $cub1 . "<br>". $cub2 . "<br>". $cub3 . "<br>";



 ?>
