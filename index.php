<?php

use Core\Sender\Curl;
use Core\Sender\Sender;

require_once 'config.php';
require_once 'vendor/autoload.php';

$url = TRELLO_API_URL . 'boards/' . BOARD_ID . '?fields=name,url&key=' . API_KEY . '&token=' . TOKEN;

$result = json_decode(Curl::exec($url), true);

var_dump($result);