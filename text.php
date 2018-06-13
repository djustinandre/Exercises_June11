<!DOCTYPE html>
<html>
  <body>

    <form action="index.php" method="post">
      <input type="textarea" name="data">
      <input type="submit" value="Submit">
    </form>

    <?php
    $myFile = 'testfile.txt';
    $fileHandle = fopen($myFile, 'a');
    if(isset($_POST['data'])) {
      global $fileHandle;
      $data = $_POST['data'];
      fwrite($fileHandle, $data);
    }
    ?>
  </body>
</html>
