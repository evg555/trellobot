<?php


namespace Core;


use Core\Entity\Board;

class Application
{
    private $board;

    public function run()
    {
        $board = Board::buildLists();
        exit;
        //TODO: получить все задачи в виде массива
        //TODO: создать карточки на неделю по задачам и времени
    }
}