<?php
require 'vendor/autoload.php';

final class DbConnection {

  public static function getConnection () {
    $driver = 'mysqli';
    $server = 'localhost';
    $user = 'root';
    $password = 'Zaq12wsx';
    $database = 'agile-php';

    $db = ADONewConnection($driver);
    $db->debug = false;
    $db->Connect($server, $user, $password, $database);
    return $db;
  }
}
