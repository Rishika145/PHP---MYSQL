<html>
    <body>
        <?php
        //Control Structures

        $name = "Saba";
        if($name == "Rishika"){
            echo $name." Name is correct";
        }
        else{
            echo $name." Name is not correct";
        }

        //Conditional Statement if and if...elseif...else
        $marks = 91;
        if($marks >= 80){
            echo "<br> You got Grade A";
        }
        elseif($marks >= 60){
            echo "<br> You got Grade B";
        }
        elseif($marks >= 40){
            echo "<br> You Got Grade C";
        }
        else{
            echo "<br> You Got Grade D";
        }

        //Conditional Statement switch
        echo "<br>";

        $day = "Sunday";
        switch($day){
            case "Sunday":
                echo "Its Sunday !!!";
                break;
            case "Monday":
                echo "Its Monday !!!";
                break;
            case "Tuesday":
                echo "Its Tuesday !!!";
                break;
            case "Wednesday":
                echo "Its Wednesday !!!";
                break;
            case "Thursday":
                echo "Its Thursday";
                break;
            default:
                echo "No matching day found !!";
        }

        //Iteratic Control Structure while loop
        echo "<br>";
        
        $count = 1;
        while($count <= 10){
        echo "<br> Count is ". $count;
        $count++;
        }

        //Iteratic Control Structure while loop statement
        echo "<br>";
        $num = 1;
        do{
            echo "<br> Do while number is".$num;
            $num++;
        }
        while($num <= 3);

        //iteratic Control Structure for loop
        echo "<br>";
        for($i=1;$i<=3;$i++){
            echo "<br> for loop number:". $i;
        }

        //iteratic Control Structure foreach statement
        echo "<br>";
        $array = ["Red","Green","BLue","Pink","Yellow"];
        foreach($array as $color){
            echo "<br> Color :". $color;
        }
        ?>    
    </body>
<html>    