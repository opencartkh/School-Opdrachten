<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gastenboek</title>
  </head>
  <body>
  <?php

  /*
  require_once('connectvars.php');
  $dbc = mysqli_connect(HOST, USER, PASS, DNBNAME);
  if (mysqli_connect_error()) {
      echo "MySQL fout: " . mysqli_connect_error();
  }
  $rows = mysqli_query($dbc, "SELECT * FROM gastenboek ORDER BY Date ASC");
  */

  //verbinding maken met de database
  $dbc = new PDO('mysql:host=localhost;dbname=kampmeij_school', 'kampmeij_school', '96LbAXakhX3v');

  //Prepared statement maken
  $query = $dbc ->prepare("INSERT INTO gastenboek VALUES (0,NOW(),:voornaam,:achternaam,:bericht)");

  //parameters binden
  $query ->bindParam(':voornaam',$voornaam);
  $query ->bindParam(':achternaam',$achternaam);
  $query ->bindParam(':bericht',$bericht2);


  //checken van de ingevoerde waardes
  if (isset($_POST['submit'])) {
      if (!empty($_POST['voornaam']) && !empty($_POST['achternaam']) && !empty($_POST['bericht'])) {
          $voornaam = $_POST['voornaam'];
          $achternaam = $_POST['achternaam'];
          $bericht = $_POST['bericht'];

          if (strlen($voornaam) > 100 || strlen($achternaam) > 254) {
              echo "De voornaam of achternaam is te lang";
              exit();
          }
          if (preg_match("%[^A-Z]%i",$voornaam . $achternaam)){
              echo "Er staan tekens in de voornaam of Achternaam die daar niet thuis horen";
              exit();
          }
          if (strlen($bericht) > 5000) {
              echo  "Het bericht is te lang";
              exit();
          }
          $bericht2 = preg_replace('/lul/','banaan',$bericht);


          //query afschieten
          $query->execute() or die('Problemen met de PDO');

          /*
          $query = "INSERT INTO gastenboek
                   VALUES (0,NOW(),'$voornaam','$achternaam','$bericht')";
          $result = mysqli_query($dbc, $query) or die ('Problemen met het bericht toe te voegen');
          */
      }
  }
  //Prepared statement maken
  $query = $dbc->query("SELECT * FROM gastenboek ORDER BY Date ASC");
  //while loop
  while($row = $query->fetch()):
      echo $row['voornaam'] . ' ' . $row['achternaam'] . ' ' . $row['bericht'] . '<br>';
  endwhile;
  $dbc = null;
  $query = null;
  ?>
  <h1>Gastenboek</h1>
    <form method="post" action="index.php" >
        <label>Voornaam:</label>
        <input type="text" name="voornaam" id="voornaam"><br>
        <label>Achternaam:</label>
        <input type="text" name="achternaam" id="achterrnaam"><br>
        <label>Bericht</label>
        <textarea name="bericht" id="bericht"></textarea>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
  </body>
</html>
