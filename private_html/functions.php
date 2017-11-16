<?php
require_once "dbconfig.php";
//takes in a name parameter
//send back a list of users from the query
function selectUsers($name){
    $query = "SELECT * FROM user WHERE First_Name like ':n%'";

    $db_name = DB_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;

    try {
        /* PDO Syntax
         * new PDO( dsn, username, password )
         * dsn = Data Source Name ... for MySQL:
         *     "mysql:dbname=name;host=localhost"
         *     where "name" is the name of the database
         */
        $dsn = "mysql:" . "dbname=" . DB_NAME . ";" . "host=localhost";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

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
    $query = "SELECT * FROM song";

    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_songs[] = $row;
    }

    return $list_of_songs;

}

function getSongById($songKeyVal) {
    $query = "SELECT * FROM song WHERE Song_ID like ':n%'";

    $db_name = DB_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;

    try {
        /* PDO Syntax
         * new PDO( dsn, username, password )
         * dsn = Data Source Name ... for MySQL:
         *     "mysql:dbname=name;host=localhost"
         *     where "name" is the name of the database
         */
        $dsn = "mysql:" . "dbname=" . DB_NAME . ";" . "host=localhost";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    $statement = $pdo->prepare($query);
    $statement->bindparam(":n", $songKeyVal);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $song[] = $row;
    }

    return $song;

}

function getArtists() {
    $query = "SELECT * FROM artist";

    $db_name = DB_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;

    try {
        /* PDO Syntax
         * new PDO( dsn, username, password )
         * dsn = Data Source Name ... for MySQL:
         *     "mysql:dbname=name;host=localhost"
         *     where "name" is the name of the database
         */
        $dsn = "mysql:" . "dbname=" . DB_NAME . ";" . "host=localhost";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_artists[] = $row;
    }

    return $list_of_artists;

}

function getAlbums() {
    $query = "SELECT * FROM album";

    $db_name = DB_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;

    try {
        /* PDO Syntax
         * new PDO( dsn, username, password )
         * dsn = Data Source Name ... for MySQL:
         *     "mysql:dbname=name;host=localhost"
         *     where "name" is the name of the database
         */
        $dsn = "mysql:" . "dbname=" . DB_NAME . ";" . "host=localhost";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    $statement = $pdo->prepare($query);
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $list_of_albums[] = $row;
    }

    return $list_of_albums;

}
/* used to populate the camelot database with a small list of songs. no longer in use now that they have been added
global $pdo;
$statement = $pdo->prepare("INSERT INTO genre (Genre_Name) VALUES ('Rrock'); INSERT INTO album (Album_Name, Genre_FK) VALUES('TestAlbum', 1);
INSERT INTO song (Title, Album_FK) VALUES ('test-song', 3);
INSERT INTO song (Title, Album_FK) VALUES ('test-song2', 3);
INSERT INTO song (Title, Album_FK) VALUES ('test-song3', 3);
INSERT INTO song (Title, Album_FK) VALUES ('test-song4', 3);");
if($statement->execute()){
    echo "got it!";
}else{
    echo"";
}
*/

function timeToSeconds($time) { // TEMPORARY

    $time = explode(":", $time);
    $total = $time[0] * 60 + $time[1];

    return $total;

}

function addSong($title, $length, $artist_id, $album_id) {

    global $pdo;


    $sql = "INSERT INTO Song (Title, Length, Artist_FK, Album_FK) VALUES(:t,:l,:ar,:al)";


    $stmt = $pdo->prepare($sql);

    $length = timeToSeconds($length);

    $stmt->bindParam(":t", $title);
    $stmt->bindParam(":l", $length);
    $stmt->bindParam(":ar", $artist_id);
    $stmt->bindParam(":al", $album_id);

    $stmt->execute();

    return true;

}
function sessioncheck(){
    if(isset($_SESSION['user'])){
        return $_SESSION['user'];
    }
    header("Location:".WEB_URL."/controllers/Logic/user/home.php");

}

 ?>