<?php

$timeToEnd = mktime(23, 00, 00, 1, 14, 2021); // ПОДСТАНОВКА ВРЕМЕНИ

$timeNow = time();

$timeRemained = $timeToEnd - $timeNow;

$dayRemained = floor($timeRemained / (60 * 60 * 24));
$timeRemained -= $dayRemained * 60 * 60 * 24;

$hoursRemained = floor($timeRemained / (60 * 60));
$timeRemained -= $hoursRemained * 60 * 60;

$minutesRemained = floor($timeRemained / 60);
$timeRemained -= $minutesRemained * 60;

$secondsRemained = $timeRemained;


echo "<h1>Days: $dayRemained, Hours: $hoursRemained, Minutes: $minutesRemained, Seconds: $secondsRemained</h1>";

?>