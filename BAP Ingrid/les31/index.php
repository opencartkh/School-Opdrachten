<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les 3</title>
  </head>
  <body>

  <?php

    $str = 'This is some text. I will be using PHP string functions to change it';
    $str_lower = strtolower($str);
    $str_camel = ucwords($str);
    $str_first = lcfirst($str);
    $str_replace = str_replace('PHP','HTML',$str);
    $str_backwards = strrev($str);
    $str_hoofd = strtoupper($str);
    $str_rotzooi = str_shuffle($str);
    $str_woordjes = str_word_count($str);
    $str_letters = strlen($str);
    $str_find = stripos($str,'PHP');
    $str_vertaal = strtr($str ,'oe','uy');


  ?>

  <b>output:</b>

  <?php
    echo '<p>' . $str_lower . '</p>';
    echo '<p>' . $str_camel . '</p>';
    echo '<p>' . $str_first . '</p>';
    echo '<p>' . $str_replace . '</p>';
    echo '<p>' . $str_backwards . '</p>';
    echo '<p>' . $str_hoofd . '</p>';
    echo '<p>' . $str_rotzooi . '</p>';
  ?>

  <b>The number of words in the string:</b>

  <?php
   echo '<p>' . $str_woordjes . '</p>';
  ?>

  <b>The number of characters in the string:</b>

  <?php
  echo '<p>' . $str_letters . '</p>' ;
  ?>

  <b>The word PHP starts at position :</b>
  <?php
    echo '<p>' . $str_find . '</p>';
  ?>

    <b>Eigen string fucntie</b>
  <?php
  echo '<p>' . $str_vertaal . '</p>';
  ?>
  </body>
</html>
