<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    protected $client;
    protected $apiUrl = 'https://libretranslate.de/translate'; // API URL LibreTranslate

    public function __construct()
    {
        $this->client = new Client();
    }

    public function translateText(Request $request)
    {
        $text = $request->input('text'); // Teks yang akan diterjemahkan
        $sourceLang = $request->input('sourceLang', 'en'); // Default 'en' untuk bahasa Inggris
        $targetLang = $request->input('targetLang', 'id'); // Default 'id' untuk bahasa Indonesia

        try {
            $response = $this->client->post($this->apiUrl, [
                'form_params' => [
                    'q' => $text,             // Teks yang diterjemahkan
                    'source' => $sourceLang,  // Bahasa sumber
                    'target' => $targetLang,  // Bahasa tujuan
                    'format' => 'text'
                ]
            ]);

            // Mengambil hasil dari response API
            $body = json_decode($response->getBody(), true);
            return response()->json([
                'translated_text' => $body['translatedText'] ?? 'Translation failed'
            ]);
        } catch (\Exception $e) {
            // Menangani error jika terjadi
            return response()->json(['error' => 'Translation service unavailable'], 500);
        }
    }
}
