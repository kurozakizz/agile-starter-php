<?php
require 'vendor/autoload.php';
require 'DbConnection.php';

final class Customer {
  private $id;
  private $name;

  public function __construct ($id, $name) {
    $this->id = $id;
    $this->name = $name;
  }

  public function getId () {
    return $this->id;
  }

  public function getName () {
    return $this->name;
  }

  public static function getCustomerList () {
    $db = DbConnection::getConnection();
    $rs = $db->Execute('select * from customer');

    $customers = [];
    while ($row = $rs->FetchRow()) {
      $customers[] = new Customer($row['id'], $row['name']);
    }

    $rs->Close();
    $db->Close();

    return $customers;
  }
}
