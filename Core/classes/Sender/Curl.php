<?php

namespace Core\Sender;

class Curl
{
    public static function exec($url, $data = '')
    {
        if ($curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

            if ($data) {
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data . '&key=' . API_KEY . '&token=' . TOKEN);
            }

        }

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}