<!DOCTYPE html>
<html>
<body>

  <form action="index.php" method = "POST">
    Enter an Integer: <input type="text" name="randomNumber" />
    <input type="submit" value="Submit" />
  </form>

  <?php
    if(isset($_POST['randomNumber'])){
      $randomNumber = $_POST['randomNumber'];
      echo "$randomNumber = ";
      for($i = 1; $i <= $randomNumber; $i++) {
        if($randomNumber % $i == 0) {
          echo "$i, ";
        }
      }
    }
  ?>

</body>
</html>
