<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/13/2017
 * Time: 5:06 PM
 */

class Artist
//$artist = new Artist($id);
//$artist->Artist_Name
{
    private $Artist_ID;
    private $Artist_Name;
    private $Artist_Biography;

    public function __construct($Id){
        $row = self::get($Id);
        foreach($row as $colName =>$value){
            $this->__set($colName, $value);
        }
    }
    public function __get($colName){
        if(property_exists($colName)){
            return $this->$colName;

        }
    }
    public function __set($colName, $value){
        if(property_exists($colName)){
            $this->$colName = $value;
        }
        return false;
    }
    public function get($Id){
        global $pdo;


        $q  = "SELECT * FROM Artist WHERE Artist_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if($st->execute() != null){
            if($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
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

    public static function create($Artist_Name, $Artist_Biography){
        global $pdo;

        $q = "Insert INTO User (Artist_Name)
          VALUES(:an)";
        $st = $pdo->prepare($q);
        $st->bindParam(":an", $Artist_Name);
        //$st->bindParam(":ab", $Artist_Biography);


        if($st->execute())
            return new Artist($pdo->lastInsertId());

    }

    public function getSongs() {
        global $pdo;

        $sql = "SELECT Song_ID FROM Song INNER JOIN Artist ON Artist_ID = Artist_FK WHERE Artist_ID = :aid";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":aid", $this->Artist_ID);

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
}