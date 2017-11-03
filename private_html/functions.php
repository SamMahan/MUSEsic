<?php

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

function getSongs() {
    $query = "SELECT * FROM song";

    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_songs[] = $row;
    }

    return $list_of_songs;

}
function register($password, $firstName, $lastName, $email, $isAdmin){
    global $pdo;
    $q = "INSERT INTO User (Password, First_Name, Last_Name, Email, Is_Admin)
      VALUES(:p,:fn,:ln,:e,:ia)";

    // $st = $pdo;
    $st = $pdo->prepare($q);
    $st->bindParam(":p", $password);
    $st->bindParam(":fn", $firstName);
    $st->bindParam(":ln", $lastName);
    $st->bindParam(":e", $email);
    $st->bindParam(":ia", $isAdmin);
    if($st->execute()){
        echo "true!!";
    }else{
        echo "nope!";
    }
}

 ?>