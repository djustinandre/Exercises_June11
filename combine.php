<!DOCTYPE html>
<html>
  <body>
    <?php
    $integers = array(1, 2, 3);
    echo "Array of Integers: ";
    for($i = 0; $i < sizeOf($integers); $i++) {
      echo "$integers[$i] ";
    }
    $characters = array('a', 'b', 'c');
    echo "<br />Array of Characters: ";
    for($i = 0; $i < sizeOf($characters); $i++) {
      echo "$characters[$i]   ";
    }
    echo "<br />Combined: ";
    $combine = (array_merge($integers, $characters));
    for($i = 0; $i < sizeOf($combine); $i++) {
      echo "$combine[$i]   ";
    }
    ?>
  </body>
</html>
