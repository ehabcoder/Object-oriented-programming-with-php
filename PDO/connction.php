<?php
//CONNECTION
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'users');

try {
  $dns = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
  $dbh = new PDO($dns, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

}
catch(PDOException $e) {
  exit("ERROR: " . $e->getMessage());
}
?>
