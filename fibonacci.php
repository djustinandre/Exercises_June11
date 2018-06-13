<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      Enter range: <input type="text" name="number" />
      <input type="submit" value="Submit" />
    </form>
    <?php
      if(isset($_POST['number'])) {
        $num = $_POST['number'];
        $first = 0;
        $second = 1;
        $third = 0;
        $sum = 1;
        echo "$num = ";
        for($i = 0; $i < $num; $i++) {
          if($i<=1) {
            $third = $i;
          } else {
            $third = $first + $second;
            $sum += $third;
            $first = $second;
            $second = $third;
          }
          echo $third . ", ";
        }
        echo "<br />sum: $sum";
      }
    ?>
  </body>
</html>
