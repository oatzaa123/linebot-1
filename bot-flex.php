<?php

$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'viahgF0U1r8cCxs6JmmQeClrBHE3Sng0L2eDKKGhIV5vv/i+Vl+Up9eooWqor+ABRue6wumafsXliuy7VRjo9trjdcPmFLcLggrp3A2SOBm4L1asIjUTVtJaiR9dCcL6pkF6nsZQBJRI90N6aZdXigdB04t89/1O/w1cDnyilFU='; 
$channelSecret = '8efdfa82f3fa7f1e0ee974a83b5c6e05';


$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

 $jayParsedAry = [
   "type" => "flex", 
   "altText" => "Flex Message", 
   "contents" => [
         "type" => "bubble", 
         "direction" => "ltr", 
         "body" => [
            "type" => "box", 
            "layout" => "vertical", 
            "contents" => [
               [
                  "type" => "text", 
                  "text" => "รายการสินค้าใหม่ประจำเดือน", 
                  "size" => "lg", 
                  "align" => "center", 
                  "gravity" => "center", 
                  "weight" => "regular", 
                  "color" => "#00FABF" 
               ] 
            ] 
         ] 
      ] 
]; 
 
 
$jsonFlex = [
   "type" => "flex", 
   "altText" => "Flex Message", 
   "contents" => [
         "type" => "carousel", 
         "contents" => [
            [
               "type" => "bubble", 
               "direction" => "ltr", 
               "hero" => [
                  "type" => "image", 
                  "url" => "https://sv1.picz.in.th/images/2020/02/01/RFgAnD.jpg", 
                  "align" => "center", 
                  "gravity" => "center", 
                  "size" => "full", 
                  "aspectRatio" => "3:4", 
                  "aspectMode" => "cover" 
               ] 
            ], 
            [
                     "type" => "bubble", 
                     "direction" => "ltr", 
                     "hero" => [
                        "type" => "image", 
                        "url" => "https://sv1.picz.in.th/images/2020/01/14/RgFCFQ.jpg", 
                        "size" => "full", 
                        "aspectRatio" => "20:13", 
                        "aspectMode" => "cover" 
                     ], 
                     "body" => [
                           "type" => "box", 
                           "layout" => "vertical", 
                           "spacing" => "sm", 
                           "contents" => [
                              [
                                 "type" => "text", 
                                 "text" => "Jeans , Denim color", 
                                 "size" => "xl", 
                                 "align" => "center", 
                                 "gravity" => "center", 
                                 "weight" => "bold", 
                                 "wrap" => true 
                              ], 
                              [
                                    "type" => "box", 
                                    "layout" => "baseline", 
                                    "contents" => [
                                       [
                                          "type" => "text", 
                                          "text" => "500 Bath", 
                                          "size" => "xl", 
                                          "align" => "center", 
                                          "weight" => "bold", 
                                          "wrap" => true 
                                       ] 
                                    ] 
                                 ] 
                           ] 
                        ], 
                     "footer" => [
                                             "type" => "box", 
                                             "layout" => "vertical", 
                                             "spacing" => "sm", 
                                             "contents" => [
                                                [
                                                   "type" => "button", 
                                                   "action" => [
                                                      "type" => "uri", 
                                                      "label" => "Details", 
                                                      "uri" => "line://app/1653550371-qMbVE2kR" 
                                                   ], 
                                                   "color" => "#00E00C", 
                                                   "style" => "primary" 
                                                ] 
                                             ] 
                                          ] 
                  ], 
            [
                                                         "type" => "bubble", 
                                                         "hero" => [
                                                            "type" => "image", 
                                                            "url" => "https://sv1.picz.in.th/images/2020/01/11/RwbPqt.jpg", 
                                                            "size" => "full", 
                                                            "aspectRatio" => "20:13", 
                                                            "aspectMode" => "cover" 
                                                         ], 
                                                         "body" => [
                                                               "type" => "box", 
                                                               "layout" => "vertical", 
                                                               "spacing" => "sm", 
                                                               "contents" => [
                                                                  [
                                                                     "type" => "text", 
                                                                     "text" => "Hat with a rape , Red", 
                                                                     "size" => "xl", 
                                                                     "align" => "center", 
                                                                     "weight" => "bold", 
                                                                     "wrap" => true 
                                                                  ], 
                                                                  [
                                                                        "type" => "box", 
                                                                        "layout" => "baseline", 
                                                                        "contents" => [
                                                                           [
                                                                              "type" => "text", 
                                                                              "text" => "250 Bath", 
                                                                              "size" => "xl", 
                                                                              "align" => "center", 
                                                                              "gravity" => "center", 
                                                                              "weight" => "bold", 
                                                                              "wrap" => true 
                                                                           ] 
                                                                        ] 
                                                                     ] 
                                                               ] 
                                                            ], 
                                                         "footer" => [
                                                                                 "type" => "box", 
                                                                                 "layout" => "vertical", 
                                                                                 "spacing" => "sm", 
                                                                                 "contents" => [
                                                                                    [
                                                                                       "type" => "button", 
                                                                                       "action" => [
                                                                                          "type" => "uri", 
                                                                                          "label" => "Details", 
                                                                                          "uri" => "line://app/1653550371-qMbVE2kR" 
                                                                                       ], 
                                                                                       "flex" => 1, 
                                                                                       "color" => "#00E00C", 
                                                                                       "style" => "primary" 
                                                                                    ] 
                                                                                 ] 
                                                                              ] 
                                                      ], 
            [
                                                                                             "type" => "bubble", 
                                                                                             "hero" => [
                                                                                                "type" => "image", 
                                                                                                "url" => "https://sv1.picz.in.th/images/2020/01/14/Ri093Q.jpg", 
                                                                                                "size" => "full", 
                                                                                                "aspectRatio" => "20:13", 
                                                                                                "aspectMode" => "cover", 
                                                                                                "backgroundColor" => "#FFFFFF" 
                                                                                             ], 
                                                                                             "body" => [
                                                                                                   "type" => "box", 
                                                                                                   "layout" => "vertical", 
                                                                                                   "spacing" => "sm", 
                                                                                                   "contents" => [
                                                                                                      [
                                                                                                         "type" => "box", 
                                                                                                         "layout" => "vertical", 
                                                                                                         "contents" => [
                                                                                                            [
                                                                                                               "type" => "text", 
                                                                                                               "text" => "Sleeved Shirt , Black", 
                                                                                                               "size" => "xl", 
                                                                                                               "align" => "center", 
                                                                                                               "weight" => "bold" 
                                                                                                            ] 
                                                                                                         ] 
                                                                                                      ], 
                                                                                                      [
                                                                                                                  "type" => "text", 
                                                                                                                  "text" => "275 Bath", 
                                                                                                                  "size" => "xl", 
                                                                                                                  "align" => "center", 
                                                                                                                  "weight" => "bold" 
                                                                                                               ] 
                                                                                                   ] 
                                                                                                ], 
                                                                                             "footer" => [
                                                                                                                     "type" => "box", 
                                                                                                                     "layout" => "horizontal", 
                                                                                                                     "flex" => 1, 
                                                                                                                     "contents" => [
                                                                                                                        [
                                                                                                                           "type" => "button", 
                                                                                                                           "action" => [
                                                                                                                              "type" => "uri", 
                                                                                                                              "label" => "Details", 
                                                                                                                              "uri" => "line://app/1653550371-y5nGjkMW" 
                                                                                                                           ], 
                                                                                                                           "flex" => 1, 
                                                                                                                           "color" => "#00E00C", 
                                                                                                                           "style" => "primary" 
                                                                                                                        ] 
                                                                                                                     ] 
                       ] 
                    ] 
         ] 
      ] 
];  

if ( sizeof($request_array['events']) > 0 ) {
    foreach ($request_array['events'] as $event) {
        error_log(json_encode($event));
        $reply_message = '';
        $reply_token = $event['replyToken'];


        $data = [
            'replyToken' => $reply_token,
            'messages' => [$jayParsedAry,$jsonFlex]
        ];

        print_r($data);

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

        echo "Result: ".$send_result."\r\n";
        
    }
}

echo "OK";




function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>
