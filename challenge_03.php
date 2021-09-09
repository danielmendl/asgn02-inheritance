<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  
  <body>
    <?php
      class Bicycle {

        public $brand;
        public $model;
        public $year;
        public $description = 'Used bicycle';
        protected $weight_kg = 0.0;
        protected $wheels = 2;
      
        public function name() {
          return $this->brand . " " . $this->model . " (" . $this->year . ")";
        }
      
        public function weight_lbs() {
          return floatval($this->weight_kg) * 2.2046226218 . " lbs";
        }
      
        public function set_weight_lbs($value) {
          $this->weight_kg = floatval($value) / 2.2046226218;
        }

        public function wheel_details() {
          $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
          return "It has " . $wheel_string. ".";
        }

        public function set_weight_kg($value) {
          $this->weight_kg = floatval($value);
        }

        public function weight_kg() {
          return $this->weight_kg . " kg";
        }
      
      }

      class Unicycle extends Bicycle {
        protected $wheels = 1;
      }


    ?>
  </body>
</html>