<?php
require_once "dbconfig.php";
//takes in a name parameter
//send back a list of users from the query
function getDateTime()
{
    $dt = date('Y-m-d H:i:s');
    return $dt;
}
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
    $list_of_songs = null;

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_songs[] = $row;
    }

    return $list_of_songs;

}


function getSongById($songKeyVal) {

    $song = array();
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
    $list_of_artists = null;
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_artists[] = $row;
    }

    return $list_of_artists;
}

function getArtistById($artistKeyVal) {

    $artist = array();
    global $pdo;
    $query = "SELECT * FROM Song WHERE Song_ID like ':n%'";

    $statement = $pdo->prepare($query);
    $statement->bindParam(":n", $artistKeyVal);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $artist[] = $row;
    }

    return $artist;
}

function getAlbums() {
    $query = "SELECT * FROM Album.class";

    global $pdo;

    $statement = $pdo->prepare($query);
    $statement->execute();
    $list_of_albums = null;

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_albums[] = $row;
    }

    return $list_of_albums;
}

function getAlbumById($albumKeyVal) {

    $album = array();
    global $pdo;
    $query = "SELECT * FROM Song WHERE Song_ID like ':n%'";

    $statement = $pdo->prepare($query);
    $statement->bindParam(":n", $albumKeyVal);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $album[] = $row;
    }

    return $album;
}

function timeToSeconds($time) { // TEMPORARY

    $time = explode(":", $time);
    $total = $time[0] * 60 + $time[1];

    return $total;


}

function timetoStandard($time) {

    $mins = floor($time / 60);
    $secs = $time % 60;

    $timearray = array($mins, $secs);

    return implode(":", $timearray);
}

function addSong($title, $length, $artist_name, $album_name) {

    global $pdo;

    $length = timeToSeconds($length);

    $sql2 = "SELECT Artist_ID FROM Artist WHERE Artist_Name = :arn";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(":arn", $artist_name);
    $stmt2->execute();
    $artist = $stmt2->fetch(PDO::FETCH_ASSOC);
    $artist_id = $artist["Artist_ID"];

    $sql3 = "SELECT Album_ID FROM Album.class WHERE Album_Name = :aln";
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->bindParam(":aln", $album_name);
    $stmt3->execute();
    $album = $stmt3->fetch(PDO::FETCH_ASSOC);
    $album_id = $album["Album_ID"];

    $sql = "INSERT INTO Song (Title, Length, Artist_FK, Album_FK) VALUES(:t,:l,:ar,:al)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":t", $title);
    $stmt->bindParam(":l", $length);
    $stmt->bindParam(":ar", $artist_id);
    $stmt->bindParam(":al", $album_id);

    $stmt->execute();

    return true;

}


function getSongArtist($artist_id) {

    global $pdo;

    $sql = "SELECT Artist_Name FROM Artist WHERE Artist_ID = :aid";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":aid", $artist_id);

    $stmt->execute();

    $artist = $stmt->fetch(PDO::FETCH_ASSOC);

    return $artist["Artist_Name"];

}

function getSongAlbum($album_id) {

    global $pdo;

    $sql = "SELECT Album_Name FROM Album.class WHERE Album_ID = :aid";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":aid", $album_id);

    $stmt->execute();

    $album = $stmt->fetch(PDO::FETCH_ASSOC);

    return $album["Album_Name"];

}

function addArtist($artist) {

    global $pdo;

    $sql = "INSERT INTO Artist (Artist_Name) VALUES (:an)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":an", $artist);

    $stmt->execute();

    return true;
}

function addAlbum($album) {

    global $pdo;

    $sql = "INSERT INTO Album.class (Album_Name, Genre_FK) VALUES (:an,1)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":an", $album);

    $stmt->execute();

    return true;
}

function sessioncheck($returnusers = true){

    if(empty($_SESSION['user'])){
        header("Location:".WEB_URL."/controllers/Logic/visitor/registration.php");
        return false;
    }
    $id = $_SESSION['user'];
    $user = new User($id);
    return $user;

    //return false;
}
function createSession($Id){
    if (empty($_SESSION['user'])){

        $_SESSION['user'] = $Id;
    }else{
        unset($_SESSION['user']);
        $_SESSION['user'] = $Id;
    }
}
function logout(){
    if(!empty($_SESSION['user'])) {
        $_SESSION = array();
    }
}
/**
 * @return randomly generated token string to be used to identify files or other things in out database
 */
function generateToken(){
     $token = uniqid("",true);
     return token;
}