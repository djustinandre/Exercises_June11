<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      Enter an integer: <input type="text" name="number" />
      <input type="submit" value="Submit" />
    </form>
    <?php
      if(isset($_POST['number'])) {
        $num = $_POST['number'];
        $fib1 = 0;
        $fib2 = 1;
        $fib = 0;
        if($num >= 1) {
          echo "Sequence = $fib1";
          if($num >= 2) {
            echo  "+ $fib2";
            for($i = 2; $i < $num; $i++) {
              $fib += $fib2;
              echo "+ $fib";
              $fib1 = $fib2;
              $fib2 = $fib;
            }
          }
          $sum = 0;
          if($num >= 1) {
            $sum = $num - 1 + $num -2;
            echo "<br /> Sum = $sum";
          }
        }
      }
    ?>
  </body>
</html>
