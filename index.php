<?php

use Core\Application;
use Core\Sender\Request;

require_once 'config.php';
require_once 'vendor/autoload.php';

$app = new Application();
$app->run();