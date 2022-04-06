<?php

require 'vendor/autoload.php';

$helloAll = new Somida\Composer\Wcs\Hello();
var_dump($helloAll->talk());