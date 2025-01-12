<html>
    <body>
        <?php
        //Arrays and Functions

        //Arrays indexed
        echo "<br>";
        $fruits = ["banana","Apple","Cherry","Orange"];
        echo "Selected Fruit : " . $fruits[1];

        foreach($fruits as $fruit){
            echo"<br> Fruit :". $fruit;
        }

        //Association Arrays
        echo "<br>";
        $ages = ["John" => 25,"Saba" => 10,"Alice" => 34];
        echo "Selected Age :". $ages["Alice"];
        foreach($ages as $name => $age){
            echo "<br>" .$name ." is ". $age ." year old.";
        }

        //Multi-dimentional Arrays
        echo "<br>";
        $students = [
            ["John", 25, false],
            ["Saba", 10, true],
            ["Alice", 34, false]
        ];

        echo "<br> Student 1 is present in the class :" . $students[0][2];

        //Array Manipulation
        echo "<br>";
        $classroom = ["Stuart","Ben","Rick"];
        foreach($classroom as $student){
            echo "<br> Student :". $student;
        } 
        //Adding elements
        echo "<br>";
        $classroom[] = "Alen";
        array_push($classroom, "Xavier");
        foreach($classroom as $student){
            echo "<br> Student :". $student;
        }

        //Updating
        echo "<br>";
        $classroom[2] = "Saba";
        foreach($classroom as $student){
            echo "<br> Student :". $student;
        }

        //Counting Elements
        echo "<br><br>";
        echo "Number of a element in the array are :". count($classroom);

        //Deleting Element
        unset($classroom[1]);
        echo "<br>";
        print_r($classroom);

        //Re-Indexing Elements
        $classroom = array_values($classroom);
        echo "<br>";
        print_r($classroom);
        ?>
    </body>
</html>