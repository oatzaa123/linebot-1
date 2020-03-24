<?php
include("database_connection.php");

$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'viahgF0U1r8cCxs6JmmQeClrBHE3Sng0L2eDKKGhIV5vv/i+Vl+Up9eooWqor+ABRue6wumafsXliuy7VRjo9trjdcPmFLcLggrp3A2SOBm4L1asIjUTVtJaiR9dCcL6pkF6nsZQBJRI90N6aZdXigdB04t89/1O/w1cDnyilFU='; 
$channelSecret = '8efdfa82f3fa7f1e0ee974a83b5c6e05';

$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array
var_export($request_array);

$query = "SELECT * FROM product";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$jsonFlex = array (
  'type' => 'flex',
  'altText' => 'Flex Message',
  'contents' => 
  array (
    'type' => 'carousel',
    'contents' => 
    array (
      0 => 
      array (
        'type' => 'bubble',
        'direction' => 'ltr',
        'hero' => 
        array (
          'type' => 'image',
          'url' => 'https://sv1.picz.in.th/images/2020/02/01/RFgAnD.jpg',
          'align' => 'center',
          'gravity' => 'center',
          'size' => 'full',
          'aspectRatio' => '3:4',
          'aspectMode' => 'cover',
        ),
      ),
      1 => 
      array (
        'type' => 'bubble',
        'direction' => 'ltr',
        'hero' => 
        array (
          'type' => 'image',
          'url' => 'https://sv1.picz.in.th/images/2020/01/14/RgFCFQ.jpg',
          'align' => 'center',
          'size' => 'full',
          'aspectRatio' => '4:3',
          'aspectMode' => 'cover',
        ),
        'body' => 
        array (
          'type' => 'box',
          'layout' => 'vertical',
          'spacing' => 'sm',
          'contents' => 
          array (
            0 => 
            array (
              'type' => 'text',
              'text' => 'Jeans , Denim color',
              'size' => 'xl',
              'align' => 'center',
              'gravity' => 'center',
              'weight' => 'bold',
              'wrap' => true,
            ),
            1 => 
            array (
              'type' => 'box',
              'layout' => 'baseline',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'text',
                  'text' => '500 Bath',
                  'size' => 'xl',
                  'align' => 'center',
                  'weight' => 'bold',
                  'wrap' => true,
                ),
              ),
            ),
            2 => 
            array (
              'type' => 'box',
              'layout' => 'vertical',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'text',
                  'text' => 'Text',
                  'margin' => 'xl',
                  'size' => 'xl',
                  'align' => 'center',
                  'color' => '#000000',
                  'wrap' => true,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

if (isset($request_array['events']) > 0) {
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
