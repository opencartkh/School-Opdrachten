<?php

  $gewicht = $_GET["gewicht"];
  $lengte = $_GET["lengte"];
  BMIcalc($gewicht,$lengte);

function BMIcalc($gewicht,$lengte) {
  $lengte = $lengte / 100;
  $bmi = round($gewicht / ($lengte * $lengte));
  echo "Je gewicht is " . $gewicht . " kg <br />";
  echo "Je lengte is " . $lengte . " m <br />";
  echo "Je BMI is " . $bmi . "<br />";
  switch ($bmi) {
    case $bmi < 18.5:
      echo "Je hebt ondergewicht. Je moet meer eten";
      break;
    case $bmi > 18.5 && $bmi< 25:
      echo "Je hebt een normaal gewicht. Ga zo door";
      break;
    case $bmi > 25 && $bmi< 27:
      echo "Je hebt licht overgewicht. Maak je geen zorgen";
      break;
    case $bmi > 27 && $bmi< 30:
      echo "Je hebt matig overgewicht. Ik zou maar is een dieet gaan doen.";
      break;
    case $bmi > 30 && $bmi< 40:
      echo "Je hebt obesitas. Ik zou je zeer zorgen gaan maken.";
      break;
    case $bmi > 40:
      echo "Je hebt morbide obesitats. Je gaat dood";
      break;
  }
}

 ?>
