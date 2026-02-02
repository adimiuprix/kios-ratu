<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Telegram extends BaseController
{
    public function sendMessage()
    {
        $pesan = trim($this->request->getPost('message'));

        if ($pesan === '') {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Pesan tidak boleh kosong'
            ])->setStatusCode(400);
        };

        $token  = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $payload = [
            'chat_id' => $chatId,
            'text'    => $pesan
        ];

        $client = \Config\Services::curlrequest();

        try {
            $response = $client->post($url, [
                'json' => $payload,
                'timeout' => 10
            ]);

            return $this->response->setJSON([
                'success' => true,
                'telegram_response' => json_decode($response->getBody(), true)
            ]);
        } catch (\Throwable $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        };
    }

    public function sendDocument(): ResponseInterface
    {
        $file = $this->request->getFile('document');

        if (!$file || !$file->isValid()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'File tidak valid',
            ])->setStatusCode(400);
        };

        $token  = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $url = "https://api.telegram.org/bot{$token}/sendDocument";

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => [
                'chat_id'  => $chatId,
                'document' => new \CURLFile(
                    $file->getTempName(),
                    $file->getMimeType(),
                    $file->getName()
                )
            ]
        ]);

        $response = curl_exec($curl);
        $error    = curl_error($curl);
        curl_close($curl);

        if ($error) {
            return $this->response->setJSON([
                'success' => false,
                'message' => $error
            ])->setStatusCode(500);
        };

        return $this->response->setJSON([
            'success' => true,
            'telegram_response' => json_decode($response, true)
        ]);
    }
}
