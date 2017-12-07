<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/13/2017
 * Time: 5:06 PM
 */

class Playlist
//$artist = new Artist($id);
//$artist->Artist_Name
    /**
     * @todo make a function() **function description
     */
{
    private $Playlist_ID;
    private $Playlist_Name;


    public function __construct($Id)
    {
        $row = self::get($Id);
        foreach ($row as $colName => $value) {
            $this->__set($colName, $value);
        }
    }

    public function __get($colName)
    {
        if (property_exists($colName)) {
            return $this->$colName;

        }
    }

    public function __set($colName, $value)
    {
        if (property_exists($colName)) {
            $this->$colName = $value;
        }
        return false;
    }

    public function get($Id)
    {
        global $pdo;


        $q = "SELECT * FROM Playlist WHERE Playlist_ID= :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if ($st->execute() != null) {
            if ($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
                return $row;
            }
        }
    }
    public static function getSongs($Playlist_ID){
        PlaylistFactory::getRelations($Playlist_ID, "Songs");
    }

    public function delete(){
        PlaylistFacroty::delete($this->Playlist_ID);
    }


    /** end public functions */
    //takes in an array of values. if those values are valid column names, it updates the columns automatically
    //adapts to any array size, can be used for one or all values
    public static function setVal($values)
    {
        global $pdo;
        $pholderKeys = array();
        $colKeys = array();
        $inputs = array();
        foreach ($values as $key => $value) {

            //create unique number designation for each value
            $pholderKeys[] = ":" . $key;
            $colKeys[] = $key;

        }
        $columnString = implode(",", $colKeys);
        $placeholderString = ":" . implode(",", $pholderKeys);

        $q = "UPDATE User SET ($columnString) VALUES ($placeholderString) WHERE User_ID = :id";
        //counter
        $i = 0;
        $st = $pdo->prepare($q);
        foreach ($values as $key => $value) {
            $st = $pdo->bindParam($pholderKeys[i], $colKeys[i]);
            $i = $i + 1;
        }
        return $st->execute();

    }

    public static function getRelationshipTable($string){
        switch($string){
            case "Song":
                return "Song_In_Playlist";
            case"User":
                return "User_Playlist";
        }
        return false;
    }


    /** creates a new playlist and inserts it into the database
     * @param $Playlist_Name
     * @return bool|Playlist
     */

    public static function create($Playlist_Name,$User_ID )
    {
        global $pdo;
        $q = "INSERT INTO musesicdb.playlist (Playlist_Name) Values(:p)";

        $st = $pdo->prepare($q);
        $st->bindParam(":p", $Playlist_Name);
        if ($st->execute()) {
            PlaylistFactory::addUserPlaylist($pdo->lastInsertId(), $User_ID);
            return new Playlist($pdo->lastInsertId());
        }
        return false;
    }
}
class PlaylistFactory{
    public static function delete($Id){
        global $pdo;
        $q = "DELETE FROM playlist WHERE Playlist_ID = :id";
        $st = $pdo->prepare($q);
        $st->bindparam(":id", $Id);
        return $st->execute();
    }

    public static function addUserPlaylist($User_ID, $Playlist_ID){
        global $pdo;
        $q = "INSERT INTO user_playlist (User_FK, Playlist_FK) VALUES(:uid, :pid)";
        $st = $pdo->prepare($q);
        $st->bindparam(":uid", $User_ID);
        $st->bindparam(":pid", $Playlist_ID);
        return $st->execute();
    }

    /**
     * gets all of the entities related to playlist via relationship table. this is meant to
     * be a flexible table to be used mainly be helper methods
     * @param $Playlist_ID
     * @param $From_Type "User" or "Song" relations
     * @param null $Entity_ID don't use this, this is exprimental
     * @return bool/arra
     */
    public static function getRelations($Playlist_ID , $From_Type,$Entity_ID = null){
        global $pdo;

       if(!$Table = Playlist::getRelationshipTable($From_Type)){return false;       }
       $q = "SELECT $From_Type"."_ID From $From_Type INNER JOIN $Table ON $From_Type"."_ID =$From_Type"."_FK INNER JOIN
        playlist on Playlist_ID = Playlist_FK WHERE Playlist_ID = :pi";

       $st = $pdo->prepare($q);
       $st->bindparam(":pi", $Playlist_ID);

       if($st->execute()){
           $entities = array();
           $row = $st->fetchAll(PDO::FETCH_ASSOC);
           foreach($row as $key=>$value){
               foreach($value as $key1 => $value1){
                   echo "values $value1";
                   $entities[] = new $From_Type($value1);
                   }
           }
           return $entities;
       }
       return false;

    }
    public static function getPlaylistSongs($Playlist_ID){
        PlaylistFactory::getRelations($Playlist_ID, "Songs");
    }

    public static function getUserPlaylists($User_ID){
        global $pdo;
        $q = "SELECT Playlist_ID FROM User_Playlist INNER JOIN Playlist ON Playlist_ID = Playlist_FK INNER JOIN User ON
          User_ID = User_FK WHERE User_ID = :id";
        $st = $pdo->prepare($q);
        $st->bindparam(":uid", $User_ID);

        if($st->execute()){
            $array = array();
            while($row = $st->fetch(PDO::FETCH_ASSOC)){
                $array[] = new Playlist($row['Playlist_ID']);
            }
            return $array;
        }
        return false;
    }
}


