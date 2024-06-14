<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class SMSC
{
    protected $login;
    protected $password;
    protected $charset;
    protected $post;
    protected $https;
    protected $debug;
    protected $smtpFrom;

    public function __construct()
    {
        $this->login = env('SMSC_LOGIN');
        $this->password = env('SMSC_PASSWORD');
        $this->charset = env('SMSC_CHARSET', 'windows-1251');
        $this->post = env('SMSC_POST', 0);
        $this->https = env('SMSC_HTTPS', 0);
        $this->debug = env('SMSC_DEBUG', 0);
        $this->smtpFrom = env('SMTP_FROM', 'api@smsc.kz');
    }

    public function sendSMS($phones, $message, $translit = 0, $time = 0, $id = 0, $format = 0, $sender = false, $query = "", $files = array())
    {
        $formats = [1 => "flash=1", "push=1", "hlr=1", "bin=1", "bin=2", "ping=1", "mms=1", "mail=1", "call=1", "viber=1", "soc=1"];
        $url = "send.php";
        $params = [
            'cost' => 3,
            'phones' => $phones,
            'mes' => $message,
            'translit' => $translit,
            'id' => $id,
            'charset' => $this->charset
        ];

        if ($format > 0) {
            $params = array_merge($params, $formats[$format]);
        }

        if ($sender !== false) {
            $params['sender'] = $sender;
        }

        if ($time) {
            $params['time'] = $time;
        }

        if ($query) {
            $params = array_merge($params, $query);
        }

        $response = $this->sendRequest($url, $params, $files);

        if ($this->debug) {
            if ($response[1] > 0) {
                echo "Сообщение отправлено успешно. ID: $response[0], всего SMS: $response[1], стоимость: $response[2], баланс: $response[3].\n";
            } else {
                echo "Ошибка №", -$response[1], $response[0] ? ", ID: " . $response[0] : "", "\n";
            }
        }

        return $response;
    }

    public function sendSMSMail($phones, $message, $translit = 0, $time = 0, $id = 0, $format = 0, $sender = "")
    {
        return Mail::raw($this->login . ":" . $this->password . ":$id:$time:$translit,$format,$sender:$phones:$message", function ($message) {
            $message->from($this->smtpFrom)
                ->to("send@send.smsc.kz")
                ->subject('');
        });
    }

    public function getSMSCost($phones, $message, $translit = 0, $format = 0, $sender = false, $query = "")
    {
        $formats = [1 => "flash=1", "push=1", "hlr=1", "bin=1", "bin=2", "ping=1", "mms=1", "mail=1", "call=1", "viber=1", "soc=1"];
        $url = "send.php";
        $params = [
            'cost' => 1,
            'phones' => $phones,
            'mes' => $message,
            'translit' => $translit,
            'charset' => $this->charset
        ];

        if ($format > 0) {
            $params = array_merge($params, $formats[$format]);
        }

        if ($sender !== false) {
            $params['sender'] = $sender;
        }

        if ($query) {
            $params = array_merge($params, $query);
        }

        $response = $this->sendRequest($url, $params);

        if ($this->debug) {
            if ($response[1] > 0) {
                echo "Стоимость рассылки: $response[0]. Всего SMS: $response[1]\n";
            } else {
                echo "Ошибка №", -$response[1], "\n";
            }
        }

        return $response;
    }

    public function getStatus($id, $phone, $all = 0)
    {
        $url = "status.php";
        $params = [
            'phone' => $phone,
            'id' => $id,
            'all' => (int)$all,
            'charset' => $this->charset
        ];

        $response = $this->sendRequest($url, $params);

        if ($this->debug) {
            if ($response[1] != "" && $response[1] >= 0) {
                echo "Статус SMS = $response[0]", $response[1] ? ", время изменения статуса - " . date("d.m.Y H:i:s", $response[1]) : "", "\n";
            } else {
                echo "Ошибка №", -$response[1], "\n";
            }
        }

        return $response;
    }

    public function getBalance()
    {
        $url = "balance.php";
        $params = [
            'charset' => $this->charset
        ];

        $response = $this->sendRequest($url, $params);

        if ($this->debug) {
            if (!isset($response[1])) {
                echo "Сумма на счете: ", $response[0], "\n";
            } else {
                echo "Ошибка №", -$response[1], "\n";
            }
        }

        return isset($response[1]) ? false : $response[0];
    }

    protected function sendRequest($cmd, $params, $files = array())
    {
        $url = ($this->https ? "https" : "http") . "://smsc.kz/sys/$cmd?login=" . urlencode($this->login) . "&psw=" . urlencode($this->password);
        $params = array_merge(['fmt' => 1], $params);
        $response = "";

        if ($this->post || strlen($url) > 2000 || $files) {
            $response = Http::asForm()->post($url, $params)->body();
        } else {
            $response = Http::get($url, $params)->body();
        }

        return explode(",", $response);
    }
}
