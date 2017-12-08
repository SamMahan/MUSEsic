<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/13/2017
 * Time: 5:17 PM
 */

//todo make songGetAuthor($key)

class Song
{
public $Song_ID;
public $Title;
public $Artist_FK;
public $Song_URL;
public $Album_FK;
public $Song_File_FK;
private $Description;

    /**
     * @todo Create ImageLink and SongLink in the database song table
     */
    //to be populated with file objects
public $ImageFile;
public $SongFile;

    public function __construct($Id){
        $row = self::get($Id);
        foreach($row as $colName =>$value){
            if($colName == "Image_FK" && $colName!= null){
                $value = new File($value);
            }
            if($colName == "Song_File_FK" && $colName!= null){
                $value = new SongFile($value);
            }
            $this->__set($colName, $value);
        }
    }
    public function __get($colName){
        if(property_exists("Song",$colName)){
            return $this->$colName;

        }
    }
    public function __set($colName, $value){
        if(property_exists("Song",$colName)){
            $this->$colName = $value;
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
                return $row;
            }
        }
    }

    public function delete(){
        return SongFactory::delete($this->Song_ID);
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
     * @param $Album_id the FK of the Album.class to which the song is attrubuted
     * @param $Pic_link the link to the uploaded picture file on the server optional, place null if not available
     * @param $Song_Link the link to the uploaded song file on the server not necessary,
     * @return bool
     */
    public static function create($Title, $Album_id,$Description = null, $Pic_Link = null, $Song_Link = null){
        global $pdo;
        $user = sessioncheck();
        $descripton = "";
        $binddes = "";
        if($Description){
            $description = ",".$Description.",";
            $binddes = ",:d";

        }
        $sql = "INSERT INTO Song (Title, Artist_FK, Album_FK, $description CreatedBy) VALUES(:t,:ar,:al, :cb$binddes)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":t", $Title);
        $stmt->bindParam(":ar", $Artist_id);
        $stmt->bindParam(":al", $Album_id);
        $stmt->bindParam(":cb", $user->User_ID);
        if($Description){
            $stmt->bindParam("::d", $Description);
        }
        if($stmt->execute()) {
            $song = new Song($pdo->lastInsertId());
            if($Pic_Link) {
                $image = SongFactory::addImageFile($Pic_Link, $song->Song_ID);

            }
            if($Song_Link!= null){
                echo "attempting upload";
                $song = SongFactory::addSongFile($Song_Link, $song->Song_ID);

            }
            return $song;

        }
        echo "song failed";
        return false;
    }
}
class SongFactory
{
    public static function delete($Id){
        global $pdo;
        $q = "DELETE FROM song WHERE Song_ID = :id";
        $st = $pdo->prepare($q);
        $st->bindparam(":id", $Id);
        return $st->execute();
    }
public static function addImageFile($File, $Id){
    global $pdo;

    $file = ImageFile::create($File, "song","images", $Id);
    
    return $file;
}
public static function addSongFile($File, $Id){
    global $pdo;


    $file = SongFile::create($File,"song","songs", $Id);
    $q = "UPDATE Song SET Song_File_FK = :id Where Song_ID = :sid";
    $st = $pdo->prepare($q);
    $st->bindparam(":id", $file->File_ID);
    $st->bindparam(":sid", $Id);
    if($st->execute()){
        return $file;
    }
    return false;
}
}