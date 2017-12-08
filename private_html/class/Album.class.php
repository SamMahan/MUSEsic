<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/13/2017
 * Time: 5:06 PM
 */


//todo make getArtist($key)
//todo make artistGetAlbum($key)

class Album

{
    private $Album_ID;
    private $Album_Name;
    private $CreatedBy;
    private $Genre_FK;

    public function __construct($Id){
        $row = self::get($Id);
        foreach($row as $colName =>$value){
            $this->__set($colName, $value);
        }
    }
    public function __get($colName){
        if(property_exists("Album",$colName)){
            return $this->$colName;

        }
    }
    public function __set($colName, $value){
        if(property_exists("Album",$colName)){
            $this->$colName = $value;
        }
        return false;
    }
    public function get($Id){
        global $pdo;

        $q  = "SELECT * FROM Album WHERE Album_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if($st->execute() != null){
            if($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
            }
        }
    }
    public function getGenre(){
        global $pdo;

        $id = $this->Album_ID;
        $q = "SELECT Genre_Name FROM genre INNER JOIN Album ON Genre_ID = Genre_FK WHERE Album_ID = aid";
        $st = $pdo->prepare($q);
        $st->bindParam(":gfk", $this->Album_ID);

        if($st->execute()){
            while($row = $st->fetch(PDO::FETCH_ASSOC)){
                return $row;
            }
        }
    }
    public function getArtist(){
        global $pdo;

        $id = $this->Album_ID;
        $q = "SELECT Artist_ID FROM Album INNER JOIN Album ON Artist_ID = Artist_FK WHERE Album_ID = :id";
        $st = $pdo->prepare($q);
        $st->bindParam(":id", $id);

        if($st->execute()){
            while($row = $st->fetch(PDO::FETCH_ASSOC)){
                return new Artist($row['Album_ID']);
            }
        }
    }

    /** end public functions */
    //takes in an array of values. if those values are valid column names, it updates the columns automatically
    //adapts to any array size, can be used for one or all values
    public function setVal($values){
        global $pdo;

        $pholderKeys = array();
        $colKeys = array();
        $inputs = array();
        foreach($values as $key =>$value) {

            //create unique number designation for each value
            $pholderKeys[] = ":".$key;
            $colKeys[] = $key;

        }
        $columnString = implode(",",$colKeys);
        $placeholderString = ":".implode(",", $pholderKeys);

        $q = "UPDATE User SET ($columnString) VALUES ($placeholderString) WHERE User_ID = :id";
        //counter
        $i = 0;
        $st = $pdo->prepare($q);
        foreach($values as $key=>$value){
            $st = $pdo->bindParam($pholderKeys[i], $colKeys[i]);
            $i = $i+1;
        }
        return $st->execute();

    }

    /** end of public functions  */

    public static function create($Album_Name){
        global $pdo;
        $user = sessioncheck();
        $q = "Insert INTO User (Album_Name, CreatedBy) VALUES(:an, :cb)";
        $st = $pdo->prepare($q);
        $st->bindParam(":an", $Album_Name);
        $st->bindParam(":cb", $user->User_ID);

        if($st->execute())
            return new Artist($pdo->lastInsertId());
    }

    public function getSongs() {
        global $pdo;

        $sql = "SELECT Song_ID FROM Song INNER JOIN Album ON Album_ID = Album_FK WHERE Album_ID = :aid";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":aid", $this->Album_ID);

        $songs = array();

        if($stmt->execute()) {
            $row = $stmt->fetch(FETCH::ASSOC);
            foreach ($row as $key=>$value) {
                $songs[] = new Song($value);
            }
            return $songs;
        }
        return false;
    }

    public function delete() {
        global $pdo;

        $success = False;

        $sql = "DELETE FROM Song WHERE Album_FK = :aid";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":aid", $this->Album_ID);


        $sql2 = "DELETE FROM Album WHERE Album_ID = :aid";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->bindParam(":aid", $this->Album_ID);
        if ($stmt->execute()){
            $success = True;
            if ($stmt2->execute()){
                $success = True;
            } else {
                $success = False;
            }
        }
        return $success;
    }
    /** end of public functions */

}
class AlbumFactory{

}