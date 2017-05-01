<?php
require 'vendor/autoload.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');

// sample data
$data = new Dwoo\Data();
$data->assign('pageTitle', 'PHP Starter for Agile Training');
$data->assign('pageContent', 'Welcome to agile training, this is just example php project');
$data->assign('phpVersion', '5.6.30');

// render template
echo $core->get('index.tpl', $data);
