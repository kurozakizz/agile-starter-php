<?php
ob_start();
session_start();
require 'vendor/autoload.php';
require 'src/Customer.php';

// init flag
$action = 'add';
$isSuccess = false;

// get data from POST param
$customerId = isset($_POST['customerId']) ? $_POST['customerId'] : '';
$customerName = $_POST['customerName'];

if (empty($customerName)) {
  $_SESSION['require_customername'] = true;
  // echo $_SESSION['require_customername']; die;
  header('Location: add.php');
  exit;
}

// save logic
if ($customerId != '') {
  // edit customer
  $action = 'edit';
  // $result = Customer::editCustomer($customerId, $customerName);
} else {
  // create customer
  $result = Customer::createCustomer($customerName);
  if ($result['success']) {
    $isSuccess = true;
  } else {
    $_SESSION['insert_customer_fail'] = true;
  }
}

// redirect handling
if ($isSuccess) {
  header('Location: list.php');
} else {
  if ($action == 'add') {
    header('Location: add.php');
  } else {
    header('Location: edit.php?id'.$customerId);
  }
}
