<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/4/2017
 * Time: 1:26 PM
 */

require_once "../../../../private_html/config.inc.php";

$response = 0;
$user = sessioncheck();

if(!$user){
    $response = 1;
    http_response_code(405);
    echo json_encode($response);
}

$album = new Album($_POST['album_id']);
$songs = array();
$songs = $album->getSongs();
foreach($songs as $key =>$value){
    $value->delete();
}
$response = $album->Title;
if(!$album->delete()){
    $response = 0;
}

http_response_code(200);
echo json_encode($response);