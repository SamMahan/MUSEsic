<?php
require_once "dbconfig.php";
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/2/2017
 * Time: 7:28 PM

 */
//takes in a name parameter
//send back a list of users from the query
function selectUsers($name){
    $query = "SELECT * FROM user WHERE First_Name like ':n%'";

    $statement = $pdo->prepare($query);
    $statement->bindparam(":n", $name);
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_users[] = $row;
    }
    return $list_of_users[1]["User_ID"];
}
 ?>