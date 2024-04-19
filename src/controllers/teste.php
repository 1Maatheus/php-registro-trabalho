<?php
//Controller temporário
$i1 = DateInterval::createFromDateString('9 hours');
$i2 = DateInterval::createFromDateString('6 hours');

echo sumIntervals($i1, $i2)->format('%H:%I:%S');

echo '<br>';


