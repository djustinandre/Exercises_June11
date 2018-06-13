<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      1st number: <input type="text" name="firstNum"><br>
      2nd number: <input type="text" name="secNum"><br>
      3rd number: <input type="text" name="thirdNum"><br>
      4th number: <input type="text" name="fourthNum"><br>
      5th number: <input type="text" name="fifthNum"><br>
      <input type="submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['firstNum']) && isset($_POST['secNum'])
      && isset($_POST['thirdNum']) && isset($_POST['fourthNum'])
      && isset($_POST['fifthNum'])) {
        $numbers =  array($_POST['firstNum'], $_POST['secNum'],
        $_POST['thirdNum'], $_POST['fourthNum'], $_POST['fifthNum']);

        for($i = 0; $i < 5; $i++) {
          for($j = 0; $j < 5; $j++) {
            if($numbers[$i] < $numbers[$j]) {
              $temp = $numbers[$j];
              $numbers[$j] = $numbers[$i];
              $numbers[$i] = $temp;
            }
          }
        }
        for($x = 0; $x < 5; $x++) {
          echo "$numbers[$x], ";
        }
      }
    ?>
  </body>
</html>
