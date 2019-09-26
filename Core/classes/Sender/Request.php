<?php


namespace Core\Sender;


class Request
{
    const KEY_STRING = '&key=' . API_KEY . '&token=' . TOKEN;

    private $url;
    private $data;
    private $method;

    public function __construct($url, $data = '', $method = 'get')
    {
        $this->url = TRELLO_API_URL . $url .($method == 'get' ? self::KEY_STRING : '');
        $this->data = is_array($data) ? $this->addApiKeys($data) : '';
        $this->method = $method;
    }

    public function get()
    {
       return Curl::exec($this->url, $this->data, $this->method);
    }

    private function addApiKeys($data) {
        $data['key'] = API_KEY;
        $data['token'] = TOKEN;

        return $data;
    }
}