<!DOCTYPE html>
<html>
  <body>
    <?php
      //Pattern 1
      for ($i=10; $i>4; $i--) {
        for ($j=$i; $j>4; $j--) {
          echo '*';
        }
        echo "<br />";
      }

      //Pattern 2
      echo "<br /> <br />";
      for($i=1; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){
          echo '*';
        }
        echo '<br />';
      }

      //Pattern 3
      echo "<br /> <br />";
      for($i = 5;  $i > 0; $i--) {
        echo "*";
      }


      //Pattern 4
      echo "<br /> <br />";

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
