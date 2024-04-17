<?php
session_start();
requireValidSession();

loadModel('Workinghours');

$date = (new Datetime())->getTimeStamp();
$today = date('d/m/Y', $dat);

$user = $_SESSION['user'];
$records = Workinghours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', ['today' => $today, 'records' => $records, 'user' => $user, 'success' => $_SESSION['message'], 'error' => $_SESSION['error']]);