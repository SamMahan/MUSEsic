<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/4/2017
 * Time: 1:26 PM
 */

$data = json_decode($_POST["data"]);
$response = 0;
$user = sessioncheck();

if(!$user){
    $response = 1;
    http_response_code(405);
    echo json_encode($response);
}

$song = new Song($data->id);
$response = $song->Title;
if(!$song->deleteSong()){
    $response = 0;
}

http_response_code(200);
echo json_encode($response);