<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      1st number: <input type="text" name="firstNum"><br>
      2nd number: <input type="text" name="secNum"><br>
      3rd number: <input type="text" name="thirdNum"><br>
      4th number: <input type="text" name="fourthNum"><br>
      5th number: <input type="text" name="fifthNum"><br>
      6th number: <input type="text" name="sixthNum"><br>
      7th number: <input type="text" name="seventhNum"><br>
      8th number: <input type="text" name="eighthNum"><br>
      <input type="submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['firstNum']) && isset($_POST['secNum'])
      && isset($_POST['thirdNum']) && isset($_POST['fourthNum'])
      && isset($_POST['fifthNum']) && isset($_POST['sixthNum'])
      && isset($_POST['seventhNum']) && isset($_POST['eighthNum'])) {

        $numbers =  array($_POST['firstNum'], $_POST['secNum'],
        $_POST['thirdNum'], $_POST['fourthNum'], $_POST['fifthNum'],
        $_POST['sixthNum'], $_POST['seventhNum'], $_POST['eighthNum']);

        for($i = 0; $i < 8; $i++) {
          for($j = 0; $j < 8; $j++) {
            if($numbers[$i] < $numbers[$j]) {
              $temp = $numbers[$j];
              $numbers[$j] = $numbers[$i];
              $numbers[$i] = $temp;
            }
          }
        }
        echo "Lowest: $numbers[0] <br />";
        echo "Highest: $numbers[7]";
      }
    ?>
  </body>
</html>
