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

  public static function getCustomer ($id) {
    $params = array($id);
    $db = DbConnection::getConnection();
    $rs = $db->Execute('select * from customer where id = ?', $params);

    $customer = null;
    if ($rs->RecordCount() > 0) {
      $row = $rs->FetchRow();
      $customer = new Customer($row['id'], $row['name']);
    }

    $rs->Close();
    $db->Close();

    return $customer;
  }

  public static function createCustomer ($name) {
    $params = array($name);
    $db = DbConnection::getConnection();
    $rs = $db->Execute('insert into customer(name) values(?)', $params);
    // $objectId = $db->Insert_ID();

    $result = array('success' => false, 'id' => '');
    // $result['success'] = false;
    // $result['id'] = '';
    if ($rs) {
      // $result['success'] = true;
      // $result['id'] = $objectId;
      $result = array('success' => true, 'id' => $db->Insert_ID());
    }

    $rs->Close();
    $db->Close();

    return $result;
  }
}
