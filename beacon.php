<?php

$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'viahgF0U1r8cCxs6JmmQeClrBHE3Sng0L2eDKKGhIV5vv/i+Vl+Up9eooWqor+ABRue6wumafsXliuy7VRjo9trjdcPmFLcLggrp3A2SOBm4L1asIjUTVtJaiR9dCcL6pkF6nsZQBJRI90N6aZdXigdB04t89/1O/w1cDnyilFU='; 
$channelSecret = '8efdfa82f3fa7f1e0ee974a83b5c6e05';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

$host = "us-cdbr-iron-east-04.cleardb.net";
$username = "b6067353944e3b";
$password = "d0750afa";
$connect = mysqli_connect($host,$username,$password);
$db = mysqli_select_db("heroku_78e9a719b1cc08e")
$sql = "SELECT * FROM product WHERE id = 1";
$result = mysql_query($sql) or die (mysql_error());
  foreach($result as $row){
      $jsonFlex = [
        'type' => 'flex',
        'altText' => 'Flex Message',
        'contents' => 
        [
          'type' => 'bubble',
          'direction' => 'ltr',
          'hero' => 
          [
            'type' => 'image',
            'url' => $row["product_img"],
            'size' => 'full',
            'aspectRatio' => '20:13',
            'aspectMode' => 'cover',
          ],
          'body' => 
          [
            'type' => 'box',
            'layout' => 'vertical',
            'spacing' => 'sm',
            'contents' => 
            [
              0 => 
              [
                'type' => 'text',
                'text' => $row["product_name"],
                'size' => 'xl',
                'align' => 'center',
                'gravity' => 'center',
                'weight' => 'bold',
                'wrap' => true,
              ],
              1 => 
              [
                'type' => 'box',
                'layout' => 'baseline',
                'contents' => 
                [
                  0 => 
                  [
                    'type' => 'text',
                    'text' => $row["product_price"],
                    'size' => 'xl',
                    'align' => 'center',
                    'weight' => 'bold',
                    'wrap' => true,
                  ],
                ],
              ],
            ],
          ],
          'footer' => 
          [
            'type' => 'box',
            'layout' => 'vertical',
            'spacing' => 'sm',
            'contents' => 
            [
              0 => 
              [
                'type' => 'button',
                'action' => 
                [
                  'type' => 'uri',
                  'label' => 'Details',
                  'uri' => 'line://app/1653550371-lm6xDb7g',
                ],
                'style' => 'primary',
              ],
            ],
          ],
        ],
      ];
    }
if (isset($request_array['events']) > 0 ) {
    foreach ($request_array['events'] as $event) {
        error_log(json_encode($event));
        $reply_message = '';
        $reply_token = $event['replyToken'];
        $data = [
            'replyToken' => $reply_token,
            'messages' => [$jsonFlex]
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
