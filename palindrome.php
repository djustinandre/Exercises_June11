<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      Enter a string: <input type="text" name="string">
      <input type="submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['string'])) {
        $str = $_POST['string'];
        $length = strlen($str);
        $flag = 0;
        for($i = 0; $i < $length; $i++) {
          if($str[$i] != $str[$length - $i - 1] ) {
            $flag = 1;
            break;
          }
        }
        if($flag) {
          echo "$str = not palindrome";
        }else {
          echo "$str = palindrome";
        }
      }
    ?>
  </body>
</html>
