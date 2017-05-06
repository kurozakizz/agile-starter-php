<?php
ob_start();
session_start();
require 'vendor/autoload.php';
require 'src/Email.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');
$data = new Dwoo\Data();

// sample data
$data->assign('pageTitle', 'PHP Starter for Agile Training');
$data->assign('pageContent', 'Welcome to agile training, this is just example php project');

$email = new Email('johndoe@sg.com');
$data->assign('email', $email->getEmail());

$customers = array(
  array( 'id' => 1, 'name' => 'Bob'),
  array( 'id' => 2, 'name' => 'John' )
);

$data->assign('customers', $customers);

// render template
echo $core->get('index.tpl', $data);
