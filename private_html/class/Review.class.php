<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/3/2017
 * Time: 4:40 PM
 */
<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/13/2017
 * Time: 5:17 PM
 */

class Review
{
    private $Review_ID;
    private $Comment;
    private $Stars;
    private $Timestamp;
    private $User_FK;

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
            if ($colName == "User_ID" || $colName == "Password" || $colName == "Salt" ) {
                return false;
            }
        }
        return false;
    }
    public function get($Id){
        global $pdo;

        $q  = "SELECT * FROM Review WHERE Review_ID= :id";

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
    private static function getRelationshipTable($string){
        switch($string){
            case "Song":
                return "Song_Review";
            case "Artist":
                return"Artist_Review";
        }
        return false;
    }
    /**
     * @param $Title the song title
     * @param $Artist_id the FK of the artist to which the song it attributed
     * @param $Album_id the FK of the Album to which the song is attrubuted
     * @param $Pic_link the link to the uploaded picture file on the server optional, place null if not available
     * @param $Song_Link the link to the uploaded song file on the server not necessary,
     * @return bool
     */
    public static function create($Comment, $Stars, $Timestamp, $User_FK, $Entity_FK, $From_Type){
        global $pdo;
        if ($tbl = getTable($FromType))
        $sql = "INSERT INTO Review (Comment, Stars, Timestamp, User_FK) VALUES(:c, :s, :t, :u)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":c", $Comment);
        $stmt->bindParam(":s", $Stars);
        $stmt->bindParam(":t", $Timestamp);
        $stmt->bindParam(":u", $User_FK);

        $stmt->execute();

        if($row  = $stmt->fetch(PDO::FETCH_ASSOC)){
            addToSong($Song_FK, )
            return new Review($row["Review_ID"]);
        }

    }



}
class ReviewFactory
{
    /**adds to the song Review File
     * @param $Song_FK
     * @param $Review_FK
     */
    private static function addToRelationshipTable($Song_FK,$Review_FK, $Table ){
        global $pdo;

        $q = "INSERT INTO :tbl (Song_FK, Review_FK) VALUES(:sfk, rfk)";
        $st = $pdo->prepare($sql);
        $st->bindparam(:tbl", $Table)
        $st->bindparam("sfk",$Song_FK);
        $st->bindparam("rfk",$Review_FK);

    }
    
}
