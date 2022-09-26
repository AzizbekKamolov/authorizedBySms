<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Hash;

class GateWay
{
    public function sendMessage($phone){
        $content = rand(1000, 9999);
        request()->session()->put('content', Hash::make($content));
        $params = [
            "method" => "send",
            "params" => [
                ["phone" => $phone,
                    "content" => "$content"]
            ]
        ];
        $url = "https://sms/api/sms";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ',
                'Content-Type: application/json',
                "Accept: application/json",
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($ch);
        curl_close($ch);
        return json_decode($return,true);
    }
}
