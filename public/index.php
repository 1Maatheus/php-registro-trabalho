<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Maria', 'email' => 'maria@gmail.com']);

print_r(User::get(['id' => 1], 'name, email'));

foreach(User::get([], 'name') as $user) {
  echo $user->name;
  echo '<br>';
}