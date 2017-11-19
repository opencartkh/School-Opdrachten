<?php
function logEvent($event,$data)
{
    $date=date("Y-m-d");
    $logname="stats/".$date.".txt";
    $ip=$_SERVER['REMOTE_ADDR'];
    $time=date("H:i:s");
    $log=$ip."|".$time."|".$event."|".$data.PHP_EOL;
    file_put_contents($logname, $log, FILE_APPEND);
}