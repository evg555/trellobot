<?php


namespace Core\Entity;

use Core\Sender\Sender;

class Board
{
    private $lists;

    public function __construct($lists)
    {
        $this->lists = $lists;
    }

    public function getLists($boardID)
    {
       return $this->lists;
    }

    public static function getListsFromTrello($boardID)
    {
        $result = false;

        $url = 'boards/' . $boardID .'/lists?cards=open&card_fields=all&filter=open&fields=id,name';

        $sender = new Sender();
        $result = $sender->sendRequest($url, '', 'get');

        return $result;
    }

    public static function buildLists()
    {
        $lists = self::getListsFromTrello(BOARD_ID);
        return new Board($lists);
    }
}