<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/4/2017
 * Time: 1:26 PM
 */

$data = json_decode($_Post["data"]);

$song = new Song($data->id);
$result = "there was an error, but at least you hit the api endpoint ;)";
if($song->deleteSong()){
    $result = "song deleted!";
}
echo json_encode($result);