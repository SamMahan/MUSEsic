<?php
/**
 * Created by PhpStorm.
 * User: Mattt
 * Date: 12/3/2017
 * Time: 5:14 PM
 */
require_once "../../../../private_html/config.inc.php";
$response = "";
//header("Content-Type: application/json", true);
foreach($_POST as $key=>$value){
    $response.= "$key=>$value: ";
}

$response = Playlist::create($_POST["Name"]);




http_response_code(200);
echo json_encode($response);


