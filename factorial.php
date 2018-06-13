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
      $x = 1;
      for ($i=1; $i <=$randomNumber-1 ; $i++) {
        $x *= ($i+1);
      }
      echo "$randomNumber! = $x";
    }
  ?>

</body>
</html>
