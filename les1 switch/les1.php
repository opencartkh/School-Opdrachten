<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BAP opdracht switch</title>
  </head>
  <body>

  <form method="post">
      <input type="text" name="beverage">
      <input type="submit" name="submit" value="klik hier">
  </form>
  <?php

  $beverage = $_POST['beverage'];

  switch ($beverage) {
      case 'cola':
          echo "You are allowed to have cola";
          echo "<img src=cola.jpg />";
          break;
      case 'beer':
          echo "You are not allowed to drink beer";
          echo "<img src=bier.jpg />";
          break;
      case 'apple juice':
          echo "You are allowed to drink that";
          echo "<img src=appel.jpg />";
          break;
      default:
          echo "I don't know what drink that is";
          echo "<img src=confused.jpg />";
  }

  ?>
  </body>
</html>
