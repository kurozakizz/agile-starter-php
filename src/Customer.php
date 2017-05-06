<?php
require 'vendor/autoload.php';
require 'DbConnection.php';

final class Customer {
  private $id;
  private $name;

  // constructure
  public function __construct ($id, $name) {
    $this->id = $id;
    $this->name = $name;
  }

  // id getter
  public function getId () {
    return $this->id;
  }

  // name getter
  public function getName () {
    return $this->name;
  }

  // get array of customer from db
  public static function getCustomerList () {
    // init db connection
    $db = DbConnection::getConnection();
    $rs = $db->Execute('select * from customer');

    // loop each row and push into array
    $customers = [];
    while ($row = $rs->FetchRow()) {
      $customers[] = new Customer($row['id'], $row['name']);
    }

    // close connection
    $rs->Close();
    $db->Close();

    return $customers;
  }

  // get one customer by id
  public static function getCustomer ($id) {
    // init db connection with parameters
    $params = array($id);
    $db = DbConnection::getConnection();
    $rs = $db->Execute('select * from customer where id = ?', $params);

    // assign row into customer object
    $customer = null;
    if ($rs->RecordCount() > 0) {
      $row = $rs->FetchRow();
      $customer = new Customer($row['id'], $row['name']);
    }

    // close connection
    $rs->Close();
    $db->Close();

    return $customer;
  }

  // insert new customer
  public static function createCustomer ($name) {
    // init db connection with parameters
    $params = array($name);
    $db = DbConnection::getConnection();
    $rs = $db->Execute('insert into customer(name) values(?)', $params);

    // set flag if success with return new customer id to caller
    $result = array('success' => false, 'id' => '');
    if ($rs) {
      $result = array('success' => true, 'id' => $db->Insert_ID());
    }

    // close connection
    $rs->Close();
    $db->Close();

    return $result;
  }
}
