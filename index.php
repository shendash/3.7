<?php 
  class Shape {
    protected $color;

     public function __construct($color) {
        $this->color = $color;
     }

      public function getColor() {
        return $this->color;
      }
  }

  class Square extends Shape {
    protected $width;

     public function __construct($color, $width) {
        parent::__construct($color);
        $this->width = $width;
     }

      public function getWidth() {
        return $this->width;
      }
  }

 $square = new Square("красный", 10);
 echo "Цвет: " . $square->getColor() . "<br>";
 echo "Ширина: " . $square->getWidth() . "<br>"; 
?>