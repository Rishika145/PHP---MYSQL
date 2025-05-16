<html>
    <body>
        <?php
      //Classes and objects
    
      class Car{
        public $brand; //property of the car
        public $color; //property of the car
        //private
        //protected
        public function startEngine(){                   //method
            return "The Engine is starting ...hiiiiiiiii";
        }
      }

      //Create an object
      $car = new Car();
      $car->brand = "Mercedes";
      $car->color = "Black";
      echo "Car Brand: ".$car->brand . "<br>";
      echo $car->startEngine();


        ?>
        </body>
        </html>
