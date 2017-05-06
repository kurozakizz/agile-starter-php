<?php
require 'vendor/autoload.php';
require 'src/Customer.php';

// init flag
$action = 'add';
$isSuccess = false;

// get data from POST param
$customerId = isset($_POST['customerId']) ? $_POST['customerId'] : '';
$customerName = $_POST['customerName'];

// save logic
if ($customerId != '') {
  $action = 'edit';
  $response = Customer::edit($customerId, $customerName);
} else {
  $response = Customer::add($customerName);
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
