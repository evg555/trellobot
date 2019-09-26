<?php

namespace Core\Sender;

class Curl
{
    public static function exec($url, $data = '', $method = 'get')
    {
        if ($curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

            switch ($method) {
                case 'post':
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    break;
                case 'put':
                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                    break;
                case 'delete':
                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                    break;
            }
        }

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}