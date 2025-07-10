<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MimoSmsService
{
    public function sendSms($recipient, $message)
    {
        Log::info('Enviando SMS com os parâmetros:', [
            'recipient' => $recipient,
            'message' => $message,
        ]);

        $token = config('services.mimo.token');
        $url = "http://52.30.114.86:8080/mimosms/v1/message/send?token={$token}";

        $payload = [
            'sender' => 'PARALEX', // Usa um sender ID válido
            'recipients' => $recipient,
            'text' => $message,
        ];

        $response = Http::post($url, $payload);

        if ($response->successful()) {
            Log::info('SMS enviado com sucesso:', $response->json());
            return $response->json();
        } else {
            Log::error('Erro ao enviar SMS:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            return null;
        }
    }
}
