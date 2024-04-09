<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');

$sql = 'SELECT * FROM users';
$result = Database::getResultFromQuery($sql);

while($row = $result->fetch_assoc()) {
  echo $row['id'] . ' ' . $row['name'] . '<br>';
}