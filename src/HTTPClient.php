<?php

namespace RPurinton\GeminiPHP;

class HTTPClient
{
    public static function post($url, $headers, $data)
    {
        return file_get_contents($url, false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => $headers,
                'content' => $data
            ]
        ]));
    }
}
