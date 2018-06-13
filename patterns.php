<!DOCTYPE html>
<html>
  <body>
    <?php
      //Pattern 1
      for ($i=10; $i>4; $i--) {
        for ($j=$i; $j>4; $j--) {
          echo '*';
        }
        echo"<br />"; 
      }

    //Pattern 2
    echo "<br />";
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
        echo "*";
        }
        for ($k = 1; $k <= 6 - $i; $k++) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $i; $j++) {
        echo "*";
        }
        echo "</br>";
    }

    echo"</br>";
    
    //Pattern 3
    for ($i = 1; $i <= 6; $i++) {

        for ($j = 1; $j <= 7 - $i; $j++) {
        echo "*";
        }
        for ($k = 1; $k < $i; $k++) {
        echo "&nbsp;&nbsp;&nbsp&nbsp;";
        }
        for ($j = 1; $j <= 7 - $i; $j++) {
        echo "*";
        }
        echo "</br>";
    }
                

     //Pattern 4
      echo "<br />";

      for($i=1; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){
          echo '*';
        }
        echo '<br />';
      }
      for($i=4; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
          echo '*';
        }
        echo '<br />';
    }
    ?>
  </body>
</html>
