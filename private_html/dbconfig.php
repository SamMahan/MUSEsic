<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// */

/* ==================================================================================
   MySQL Connection information and site wide constants
   PDO - PHP Data Objects
   ------------------------------------------------------------------------------- */
#
# Set database constants

define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'musesicDB');
define('DB_ADDRESS', "localhost");
// */

/*
define('DB_USER', 'musesic');
define('DB_PASSWORD', 'flu3lik3');
define('DB_NAME', 'musesicDB');
define('DB_ADDRESS', "localhost");
// */
#
#  Begin the session
session_start();
#
#  Connect to the database
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
    $dsn = "mysql:" . "dbname=" . DB_NAME . ";" . "host=".DB_ADDRESS;
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>