<?php

namespace App\Services;

use GuzzleHttp\Client;

class TranslationService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('services.libretranslate.base_uri')
        ]);
    }

    public function translate($text, $from, $to)
    {
        $response = $this->client->post('/translate', [
            'json' => [
                'q' => $text,
                'source' => $from,
                'target' => $to,
                'format' => 'text'
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true)['translatedText'];
    }
}

?>
