<?php
require_once "dbconfig.php";
//takes in a name parameter
//send back a list of users from the query
function selectUsers($name){

    global $pdo;

    $query = "SELECT * FROM User WHERE First_Name like ':n%'";

    $statement = $pdo->prepare($query);
    $statement->bindparam(":n", $name);
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_users[] = $row;
    }
    return $list_of_users[1]["User_ID"];
}

function getSongs() {
    global $pdo;
    $query = "SELECT * FROM Song";

    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_songs[] = $row;
    }

    return $list_of_songs;

}

function getSongById($songKeyVal) {

    global $pdo;
    $query = "SELECT * FROM Song WHERE Song_ID like ':n%'";

    $statement = $pdo->prepare($query);
    $statement->bindParam(":n", $songKeyVal);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $song[] = $row;
    }

    return $song;

}

function getArtists() {

    global $pdo;

    $query = "SELECT * FROM Artist";
    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_artists[] = $row;
    }

    return $list_of_artists;

}

function getAlbums() {
    $query = "SELECT * FROM Album";

    global $pdo;

    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_albums[] = $row;
    }

    return $list_of_albums;

}


function timeToSeconds($time) { // TEMPORARY

    $time = explode(":", $time);
    $total = $time[0] * 60 + $time[1];

    return $total;

}

function addSong($title, $length, $artist_name, $album_name) {

    global $pdo;

    $length = timeToSeconds($length);

    $sql2 = "SELECT Artist_ID FROM Artist WHERE Artist_Name = ':arn'";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(":arn", $artist_name);
    $artist_id = $stmt2->execute();

    $sql3 = "SELECT Album_ID FROM Album WHERE Album_Name = ':aln'";
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->bindParam(":aln", $album_name);
    $album_id = $stmt3->execute();

    $sql = "INSERT INTO Song (Title, Length, Artist_FK, Album_FK) VALUES(:t,:l,:ar,:al)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":t", $title);
    $stmt->bindParam(":l", $length);
    $stmt->bindParam(":ar", $artist_id);
    $stmt->bindParam(":al", $album_id);

    $stmt->execute();

    return true;

}

function addArtist($artist) {

    global $pdo;

    $sql = "INSERT INTO Artist (Artist_Name) VALUES (:an)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":an", $artist);

    $stmt->execute();

    return true;
}

function sessioncheck(){

    if(isset($_SESSION['user'])){
        return $_SESSION['user'];
    }
    header("Location:".WEB_URL."/controllers/Logic/visitor/registration.php");

    return false;
}