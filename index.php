<?php

use Core\Sender\Request;

require_once 'config.php';
require_once 'vendor/autoload.php';

$url = '';

/*
 * Удаление карточки с id 5d8cb9aa0fa4c92e3cff8d0d
 */
/*
$cardTestID = '5d8cc904a528632a44509eec';
$url = 'cards/' . $cardTestID;
*/

/*
 * Перенос карточки в список с id 5ab5c95aa7d360f8367c5edd
 */
/*
$cardTestID = '5d8cc904a528632a44509eec';
$url = 'cards/' . $cardTestID;
$data = [
    'idList' => '5ab5c95aa7d360f8367c5edd'
];
*/


/*
 * Создание новой карточки
 */
/*
$url = 'cards';
$data = [
    'name' => 'Тестовая задача',
    'desc' => 'бла бла бла',
    'pos' => 'top', //карточка добавляется сверху
    'idList' => '5ab5c906ab3dba540eab05cb', //id Списка узнаем из метода получения списков
    'keepFromSource' => 'all'
];
*/

$request = new Request($url, [], 'delete');
$result = json_decode($request->get(), true);

var_dump($result);