<html>
    <body>
        <?php
        //Functons
        function firstFunction(){
            echo "Hello World !";
        }

        firstFunction();
        //With Parameter Function
        function greet($name){
            echo "<br> Hello " . $name;
        }
        greet("Class");

        //With Default Parameter Function
        Function defaultParameter($name = "Guest"){
            echo "<br> Hello " . $name;
        }
        defaultParameter();
        defaultParameter("Default Parameter !");

        //Function that returns a value
        function multiply($a, $b){
            return $a*$b;
        }
        $result = multiply(8, 9);
        echo "<br>". $result;

        //Function BY value Example
        function addTen($num){
            $num += 10;
            echo "<br> Function value : ". $num;
        }
        $x=5;
        addTenByRefer($x);
        echo "<br> Original Value : ". $x;
        echo "<br>";

        //Function by value exmaple
        function addTenByRefer(&$num){
            $num += 10;
            echo "<br> Function value : ". $num;
        }
        $y=5;
        addTenByRefer($y);
        echo "<br> Original Value : ". $y;

        //Early Returning the Value in Function(Conditional Return)
        function checkEvenOdd($num){
            if($num % 2 == 0){
                return "Even";
            }
            return "Odd";
        }
        echo "<br>";
        echo checkEvenOdd(10);
        echo "<br>";
        echo checkEvenOdd(15);

        
        ?>
    </body>
</html>
