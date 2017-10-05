<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>Datum en tijd</h1>
  <?php
  echo "Today is " . date("l") . "<br>";
  echo "The date is " . date("Y/m/d") . "<br>";
  echo "The time is " . date("h:i:sa") . "<br>";
  ?>

  <h1>Sessie</h1>
  <?php

  session_start();
  if(isset($_SESSION['view'])){
      $_SESSION['view']=$_SESSION['view']+1;
  }else{
      $_SESSION['view']=1;
  }
  echo "Deze pagina is al zo vaak bezocht: " .$_SESSION['view'];

  ?>

  <h1>Naam</h1>
  <form name="lijmen" action="datum.php">
      <input type="text" name="voornaam" placeholder="voornaam"> <br>
      <input type="text" name="tussenvoegsel" placeholder="tussenvoegsel"><br>
      <input type="text" name="achternaam" placeholder="achternaam"><br>
      <input type="submit" name="submit" value="submit" id="submit"><br>
  </form>
  <?php
  if (isset($_POST['submit'])) {
      $voornaam = $_POST['voornaam'];
      $tussenvoegsel = $_POST['tussenvoegsel'];
      $achternaam = $_POST['achternaam'];

      echo "Alles aan elkaar is: " . $voornaam . " " . $tussenvoegsel . " " . $achternaam;


  }

  ?>
  </body>
</html>
