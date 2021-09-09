<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inheritance</title>
  </head>
  
  <body>
    <?php
    
    class Shoe {
      public $color;
      public $material;
      public $size;

      protected function make() {
        return $this->color . ", " . $this->material . ", " . $this->size;
      }
    }

    class Sneaker extends Shoe {
      public $soleMaterial;
      public $height;
      public $sport;

      private function use() {
        return $this->material . " " . $this->height . " for " . $this->sport;
      }
    }

    class Boot extends Shoe {
      public $construction;
      public $eyeletCount;

      private function bootDetail() {
        return $this->make() . ", " . $this->construction . ", " . $this->eyeletCount;
      }
    }

    $exShoe = new Shoe;
    $exShoe->color = "tan";
    $exShoe->material = "canvas";
    $exShoe->size = "twelve";


    $exSneaker = new Sneaker;
    $exSneaker->color = "red";
    $exSneaker->material = "plastic";
    $exSneaker->size = "10";
    $exSneaker->soleMaterial = "rubber";
    $exSneaker->sport = "basketball";
    $exSneaker->height = "mid-top";

    $exBoot = new Boot;
    $exBoot->color = "brown";
    $exBoot->material = "suede";
    $exBoot->size = "8.5";
    $exBoot->construction = "welted";
    $exBoot->eyeletCount = "12";

    echo $exShoe->make() . "<br>";
    echo $exSneaker->use() . "<br>";
    echo $exBoot->bootDetail() . "<br>";

    ?>
  </body>
</html>