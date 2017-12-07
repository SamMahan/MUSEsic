<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/13/2017
 * Time: 5:17 PM
 */

class Song
{
public $Song_ID;
public $Title;
public $Artist_FK;
public $Song_URL;
public $Album_FK;

    /**
     * @todo Create ImageLink and SongLink in the database song table
     */
    //to be populated with file objects
public $ImageFile;
public $SongFile;

    public function __construct($Id){
        $row = self::get($Id);
        foreach($row as $colName =>$value){
            if(colName == "Image_FK"){
                $value = new File($value);
            }
            if(colName == "Song_FK"){
                $value = new File($value);
            }
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
            if ($colName == "User_ID" || $colName == "Password" || $colName == "Salt" ) {
                return false;
            }
        }
        return false;
    }
    public function get($Id){
        global $pdo;

        $q  = "SELECT * FROM Song WHERE Song_ID= :id";

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
    public function setReview($Review){
        setVal(array(""));
    }

    /** end of public functions  */
    /**donovan, you can
     * @param $Title the song title
     * @param $Artist_id the FK of the artist to which the song it attributed
     * @param $Album_id the FK of the Album to which the song is attrubuted
     * @param $Pic_link the link to the uploaded picture file on the server optional, place null if not available
     * @param $Song_Link the link to the uploaded song file on the server not necessary,
     * @return bool
     */
    public static function create($Title, $Album_id, $Pic_Link = null, $Song_Link = null){
        global $pdo;

        $sql = "INSERT INTO Song (Title, Artist_FK, Album_FK) VALUES(:t,:ar,:al)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":t", $Title);
        $stmt->bindParam(":ar", $Artist_id);
        $stmt->bindParam(":al", $Album_id);




            if($Pic_Link) {
                $image = SongFactory::addImageFile($Pic_Link);
                $stmt->bindparam(":sfk", $image->File_ID);
            }
            if($Song_Link){
                $song = SongFactory::addSongFile($Song_Link);
                $stmt->bindparam(":sfk", $song->File_ID);
            }
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            return new Song($row['Song_ID']);
        }
    }
}
class SongFactory
{
    public static function deleteSong($Id){
        global $pdo;
        $q = "DELETE FROM song WHERE Song_ID = :id";
        $st = $pdo->prepare($q);
        $st->bindparam(":id", $Id);
        return $st->execute();
    }
public static function addImageFile($File){
    $file = ImageFile::create($File);
    return $file;
}
public static function addSongFile($File){
    $file = SongFile::create($File );
    return $file;
}
}