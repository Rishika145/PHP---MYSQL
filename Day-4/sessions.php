<html>
    <body>
        <?php

     //Sessions 
     //Creating a session
     session_start();
     $_SESSION["username"] = "John";
     $_SESSION["role"] = "Hacker";

     echo "Session has been created! <br>";


     //Accessing Session Variables
     if(isset($_SESSION["username"])){
        echo "Welcome ". $_SESSION["username"];
     }
     else{
        echo "No active session found !";
     }

     //Destroing/Killing/Terminating the session
     session_unset();
     session_destroy();
     echo "<br> Session has been terminated ! <br>";

     if(isset($_SESSION["username"])){
        echo "welcome".$_SESSION["username"];
     }
     else{
       echo "No active session found !";
     }

     
     
        ?>
        </body>
        </html>
