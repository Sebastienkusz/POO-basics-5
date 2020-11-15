<?php
// index.php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'RechargeableInterface.php';
require_once 'LightableInterface.php';

$car = new Car('green', 4, 'electric');
var_dump($car->switchOff());
var_dump($car->switchOn());

$bicycle = new Bicycle('red', '1');
var_dump($bicycle->switchOff());
$bicycle->setCurrentSpeed('5');
var_dump($bicycle->switchOn());
$bicycle->setCurrentSpeed('15');
var_dump($bicycle->switchOn());
