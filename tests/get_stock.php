<?php

require_once(dirname(__FILE__).'/../linnlive.php');

$linn = new Stock();
$linn->initialize(array('api_key' => ''));
$stock = $linn->get_stock();

var_dump($stock->data());