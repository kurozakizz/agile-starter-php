<?php
require 'vendor/autoload.php';
require 'src/Email.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');

// sample data
$data = new Dwoo\Data();
$data->assign('pageTitle', 'PHP Starter for Agile Training');
$data->assign('pageContent', 'Welcome to agile training, this is just example php project');

$email = new Email('johndoe@sg.com');
$data->assign('email', $email->getEmail());

// render template
echo $core->get('index.tpl', $data);
