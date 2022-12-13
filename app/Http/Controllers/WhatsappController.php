<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

class WhatsappController extends Controller
{
    //
    public function sendMessageWhatsapp(){
//        $what = new WhatsAppCloudApi([
//            'from_phone_number_id' => '100362246257991',
//            'access_token' => 'EAAMHc6d4V9kBALMGZBG3d1sptRHwwHDdr5812yu9eca8Hnxlz4lR0Xp7t1IAqZAp0HHzZANtQqeBuR47vRQCANnkkCPVEn8y5HWGNnpb4PyMCZBrKa5Vt2XuO2g5nGHyN8962jj0kBkZCVkZBDPecRMkaZClCZCf6puZBOmQKa9quB48ydEQGOyjvLpumrZCmaRZChUYNg9I9lRTNhZBlL57pHcyPQMgSsMkD5IZD',
//        ]);
        $client = new Client();

        $phoneId = '100362246257991';

        $version = 'v15.0';

        $url = "https://graph.facebook.com/{$version}/{$phoneId}/messages";

        $token = 'EAAMHc6d4V9kBALMGZBG3d1sptRHwwHDdr5812yu9eca8Hnxlz4lR0Xp7t1IAqZAp0HHzZANtQqeBuR47vRQCANnkkCPVEn8y5HWGNnpb4PyMCZBrKa5Vt2XuO2g5nGHyN8962jj0kBkZCVkZBDPecRMkaZClCZCf6puZBOmQKa9quB48ydEQGOyjvLpumrZCmaRZChUYNg9I9lRTNhZBlL57pHcyPQMgSsMkD5IZD';

        $headers = [
            'Authorization' => "Bearer $token",
            'Content-Type' => 'application/json',
        ];
        $sendNumberFor = '584120714960';

        $request = [
            "messaging_product" => "whatsapp",
            "to" => $sendNumberFor,
            "type" => "template",
            "template" => [
                "name" => "hello_world",
                "language" => [
                    "code" => "en_US"
                ]
            ]
        ];

        $response = $client->post($url,[
            'body' => json_encode($request, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
            ),
            'headers' => $headers

        ]);
//        $response = $what->sendTextMessage(
//            '584126540220',
//            'Hola mundo',
//        );
        return response()->json(['data'=>'message','response' => $response]);
    }
}
