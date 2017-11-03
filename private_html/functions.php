<?php

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
    $query = "SELECT * FROM song";

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

 ?>