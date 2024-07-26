<?php

namespace App\Utils;

use Exception;

class Http
{

    /**
     * @throws Exception
     */
    public static function get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpcode >= 200 && $httpcode < 300) {
            return json_decode($response, true);
        } else {
            throw new Exception('Falha ao buscar a URL: ' . $url);
        }
    }
}