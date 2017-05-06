<?php
require 'vendor/autoload.php';
require 'src/Customer.php';

// Dwoo config
$core = new Dwoo\Core();
$core->setTemplateDir('templates/');

// render template
echo $core->get('add.tpl');
