<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      Enter an integer: <input type="text" name="number">
      <input type="submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['number'])) {
        $num = $_POST['number'];
        $isPrime = true;
        for($i = 2; $i <= $num / 2; $i++) {
          if($num % $i == 0) {
            $isPrime = false;
            break;
          }
        }
        if($isPrime) {
          echo "prime";
        } else {
          echo "not prime";
        }
      }
    ?>
  </body>
</html>
