<?php
/**
 * Created by PhpStorm.
 * User: Dono
 * Date: 12/7/17
 * Time: 6:24 PM
 */
$data = json_decode($_POST["data"]);
$response = 0;
$user = sessioncheck();

if(!$user){
    $response = 1;
    http_response_code(405);
    echo json_encode($response);
}

$album = new Album($data->id);
$list = $album->getSongs();

$songlist = "<ul>";
foreach($list as $key=>$value) {
    $songlist = $songlist . "<li>" . $value->Song_Name . "</li>";
}
$response = $songlist . "</ul>";

if(!$album->getSongs()){
    $response = 0;
}

http_response_code(200);
echo json_encode($response);