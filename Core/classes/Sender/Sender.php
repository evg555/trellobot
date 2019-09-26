<?php

namespace Core\Sender;

class Sender
{
    public function sendRequest($url, $data, $method)
    {
        $request = new Request($url, $data, $method);
        return json_decode($request->get(), true);
    }
}