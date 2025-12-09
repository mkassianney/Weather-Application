<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ChatGPTService
{
    public function translateToPortuguese($message)
    {
        $prompt = "traduza esse texto: " . $message;

        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => env("OPENAI_MODEL"),
                "messages" => [
                    ["role" => "user", "content" => $prompt]
                ],
            ]);

        return $response->json();
    }

    public function translateToEnglish($message)
    {
        $prompt = "translate this text to English: " . $message;

        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->withoutVerifying()
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => env("OPENAI_MODEL"),
                "messages" => [
                    ["role" => "user", "content" => $prompt]
                ],
            ]);

        $json = $response->json();
        \Illuminate\Support\Facades\Log::info('OpenAI response:', $json);


        return $json["choices"][0]["message"]["content"] ?? $message;
    }


}
