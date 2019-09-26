<?php


namespace Core;


use Core\Entity\Board;

class Application
{
    private $lists;

    public function run()
    {
        $lists = Board::buildLists();


        var_dump($lists);
        exit;
        //TODO: получить все задачи в виде массива
        //TODO: создать карточки на неделю по задачам и времени
    }
}