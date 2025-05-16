<html>
    <body>
        <?php
     //Cookies

     //Set a cookie
     $cookieName = 'langPreference';
     $cookieValue = 'French';
     $cookieExpire = time() + (60);

     setcookie($cookieName,$cookieValue,$cookieExpire,"/");

     echo "Cookie has been set!";

      //Accessing the cookie
      if(isset($_COOKIE[$cookieName])){
        echo "<br> Your language prefernece is: ".$_COOKIE[$cookieName];
      }
      else{
        echo "<br> Cookie is not set !";
      }


      //Deleting the cookie or Block the cookie
      setcookie($cookieName,$cookieValue,time()- (30) , "/");
      echo "<br> Cookie has been deleted ! ";
      
        ?>
        </body>
        </html>