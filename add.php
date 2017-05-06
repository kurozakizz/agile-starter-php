<?php
ob_start();
session_start();
require 'vendor/autoload.php';
require 'src/Customer.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');
$data = new Dwoo\Data();

if (!empty($_SESSION['require_customername']) && $_SESSION['require_customername'] === true) {
  $data->assign('require_customername', true);
  unset($_SESSION['require_customername']);
}

// render template
echo $core->get('add.tpl', $data);
