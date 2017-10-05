<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Opdracht 3.2</title>
  </head>
  <body>
    <h1>Stringhandler opdracht</h1>
    <form method="post" action="index.php">
      <input type="text" id="invoer" name="invoer"  placeholder="String 2" />
      <input type="submit" id="submit" name="submit" value="submit" />
    </form>
    <?php

    $string = isset($_POST['invoer']) ? $_POST['invoer'] : "";

    $str_hoofd = strtoupper($string);
    $str_eerste = ucfirst($string);
    $str_letters = strlen($string);
    $str_spatieaantal= substr_count($string, ' ');
    $str_find = stripos($string,' ');
    $str_zelfde = strcmp("Hello world!",$string);
    $str_zelfde_hoofd = strcasecmp("HELLO WORLD",$string);

    ?>
    <ul>
      <li>
          <?php
          echo 'De lengte van inputstring is: ' . $str_letters . ' characters';
          ?>
      </li>
      <li>
          <?php
            echo 'Zoeken naar spaties. Er zit een spatie op positie: ' . $str_find;
          ?>
      </li>
      <li>
          <?php
            echo 'Zoeken naar aantal spaties. Er zitten x spaties in: ' . $str_spatieaantal;
          ?>
      </li>
      <li>
          <?php
            echo ' Wijzig de eerste letter van string 3 naar hoofdletter: ' . $str_eerste;
          ?>
      </li>
      <li>
          <?php
            echo 'Alles in hoofdletters: ' . $str_hoofd;
          ?>
      </li>
      <li>
          <?php
          echo 'De input is precies gelijk aan \'Hello World\': ' . $str_zelfde;
          ?>
      </li>
      <li>
          <?php
            echo 'De input is gelijk aan \'Hello World\' of \'hello world\' of HELLO WORLD\', etc.:' . $str_zelfde_hoofd
          ?>
      </li>
    </ul>

  </body>
</html>
