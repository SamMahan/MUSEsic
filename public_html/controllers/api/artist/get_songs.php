<?php
/**
 * Created by PhpStorm.
 * User: Dono
 * Date: 12/7/17
 * Time: 6:36 PM
 */
$data = json_decode($_POST["data"]);
$response = 0;
$user = sessioncheck();

if(!$user){
    $response = 1;
    http_response_code(405);
    echo json_encode($response);
}

$artist = new Artist($data->id);
$list = $artist->getSongs();

$songlist = "<ul>";
foreach($list as $key=>$value) {
    $songlist = $songlist . "<li>" . $value->Song_Name . "</li>";
}
$response = $songlist . "</ul>";

if(!$artist->getSongs()){
    $response = 0;
}

http_response_code(200);
echo json_encode($response);