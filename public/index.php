<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Maria', 'email' => 'maria@gmail.com']);
$user->email = 'maria1@gmail.com';
print_r($user);
echo '<br>';
print_r($user->email);
