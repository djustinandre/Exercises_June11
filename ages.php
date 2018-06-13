<!DOCTYPE html>
<html>
<body>

  <form action="index.php" method = "POST">
    Enter age: <input type="text" name="age" />
    Enter guess: <input type="text" name="guess" />
    <input type="submit" value="Submit" />
  </form>

  <?php
    if(isset($_POST['age']) && isset($_POST['guess'])){
      $age = $_POST['age'];
      $guess = $_POST['guess'];
      if($guess == $age) {
        echo 'correct';
      }
      while($guess != $age) {
        if($guess > $age) {
          echo 'lower';
          break;
        } else if ($guess < $age) {
          echo 'higher';
          break;
        }
      }
    }

  ?>

</body>
</html>
