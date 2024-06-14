<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    protected $login;
    protected $password;
    protected $mobizonApiKey;

    public function __construct()
    {
        $this->login = env('SMSC_LOGIN');
        $this->password = env('SMSC_PASSWORD');
        $this->mobizonApiKey = env('MOBIZON_API_KEY');
    }

    public function sendSMS($phone, $message): string
    {
        $formattedPhone = $this->formatPhoneNumber($phone);
        if ($this->isMobizon($formattedPhone)) {
            $url = 'https://api.mobizon.kz/service/message/sendsmsmessage';
            $response = Http::get($url, [
                'recipient' => $this->formatPhoneNumber($phone),
                'text' => 'Проверочный код: '.$message.' - для входа на REPETITOR.KZ',
                'apiKey' => $this->mobizonApiKey
            ]);
        } else {
            $url = 'https://smsc.kz/sys/send.php';
            $response = Http::get($url, [
                'login' => $this->login,
                'psw' => $this->password,
                'phones' => $phone,
                'mes' => 'Проверочный код: '.$message.' - для входа на REPETITOR.KZ',
            ]);
        }
        return $response->body();
    }

    public function formatPhoneNumber($phoneNumber): string
    {
        $cleanedNumber = preg_replace('/\D+/', '', $phoneNumber);
        if (str_starts_with($cleanedNumber, '7')) {
            $formattedNumber = '' . $cleanedNumber;
        } else {
            $formattedNumber = '7' . $cleanedNumber;
        }
        return $formattedNumber;
    }

    public function isMobizon(string $number): bool
    {
        if (str_starts_with($number, '7700') || str_starts_with($number, '7707') || str_starts_with($number, '7747')) {
            return true;
        } else {
            return false;
        }
    }
}
