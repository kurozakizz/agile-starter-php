<?php
ob_start();
session_start();
require 'vendor/autoload.php';
require 'src/Customer.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');
$data = new Dwoo\Data();

// get customers and assign to template data
$customers = Customer::getCustomerList();
$data->assign('customers', $customers);

// when session insert_customer_id exist then display success box
if (!empty($_SESSION['insert_customer_id'])) {
  $data->assign('insert_customer_id', $_SESSION['insert_customer_id']);
  unset($_SESSION['insert_customer_id']);
}

// render template
echo $core->get('list.tpl', $data);
