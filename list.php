<?php
require 'vendor/autoload.php';
require 'src/Customer.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');
$data = new Dwoo\Data();

// get customers and assign to template data
$customers = Customer::getCustomerList();
$data->assign('customers', $customers);

// render template
echo $core->get('list.tpl', $data);
