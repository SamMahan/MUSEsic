<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/4/2017
 * Time: 1:26 PM
 */

require_once "../../../../private_html/config.inc.php";
/**require_once "../../../../private_html/class/Artist.class.php";
require_once "../../../../private_html/functions.php";
require_once "../../../../private_html/class/User.class.php";

require_once "../../../../private_html/functions.php";
*/
$response = 0;
$user = sessioncheck();

if(!$user){
    $response = 1;
    http_response_code(405);
    echo json_encode($response);
}

$artist = new Artist($_POST['artist_id']);
$response = $artist;
$songs = array();
$songs = $artist->getSongs();
foreach($songs as $key =>$value){
    $value->delete();
}
$response = $artist->Title;
if(!$artist->delete()){
    $response = 0;
}

http_response_code(200);
echo json_encode($response);