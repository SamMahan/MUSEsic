<?php
/**
 * Created by PhpStorm.
 * User: Mattt
 * Date: 12/3/2017
 * Time: 5:14 PM
 */


$data = json_decode($_POST["data"]);
//Playlist::create($data->Name, $data->Number_Of_Songs, $data, $data->RunTime, $data->User_FK);

http_response_code(200);
echo json_encode($data);