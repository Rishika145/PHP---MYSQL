<html>
<body>
<?php
// This is single line comment
//echo "Happy Birthday Saniya!

echo "Happy Birthday Saniya!!";
echo "This is comment example";

$name = "Rishika";  //string
$age = 18;          //integer
$time = 14.45;      //float
$class = true;      //Boolean


//Compound types
$student_arr = array("Rishika","saba","saniya");


class Student{           //Class
    public $marks;
}

$stud = new student();  //Object
$stud->marks = 90;

//Special types
$null_var = null;

echo "<br> String : " , $name;
echo "<br> integer : " , $age;
echo "<br> float : " , $time;
echo "<br> Boolean : " , $class;
echo "<br> Array : " , $student_arr[0];

//echo "Object : = ", $stud
echo "Null : ", $null_var;

/*This is multiline comment
Developed for php session*/
?>
</body>
</html>