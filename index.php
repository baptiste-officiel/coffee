



<?php

require('vendor/autoload.php');
if($_SERVER['HTTP_HOST'] !=  "coffee-k6-bl.herokuapp.com") {
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}

function dbaccess() {
  $dbConnection = "mysql:dbname=". $_ENV['DB_NAME'] ."; host=". $_ENV['DB_HOST'] .":". $_ENV['DB_PORT'] ."; charset=utf8";
  $user = $_ENV['DB_USERNAME'];
  $pwd = $_ENV['DB_PASSWORD'];
  
  $db = new PDO ($dbConnection, $user, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  return $db;
}
  
$db = dbaccess();

$req = $db->query('SELECT name FROM waiter')->fetchAll();

foreach ($req as $dbreq) {
  echo $dbreq['name'] . "<br>" .PHP_EOL;
}

echo "<br>" .PHP_EOL;

$edibles = $db->query('SELECT name, price FROM edible')->fetchAll();

foreach($edibles as $edible){
    echo $edible['name'] . " au prix de " . $edible['price'] . "€<br>" .PHP_EOL;
}