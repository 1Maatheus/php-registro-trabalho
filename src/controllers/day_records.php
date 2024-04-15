<?php
session_start();
requireValidSession();

$date = (new Datetime())->getTimeStamp();
$today = date('d/m/Y', $dat);

loadTemplateView('day_records', ['today' => $today]);