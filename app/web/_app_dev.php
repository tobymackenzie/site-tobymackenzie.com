<?php
use TJM\Bundle\StandardEditionBundle\Component\App\App;

$loader = require_once __DIR__ . '/../bootstrap.php';
App::setEnvironment('dev');
require __DIR__ . '/_app.php';
