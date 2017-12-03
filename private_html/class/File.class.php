<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/23/2017
 * Time: 11:52 AM
 */

class File
{
    private $File_ID;
    private $Link;
    private $Created;
    private $Created_By;
    private $Modified;
    private $Modified_By;
   //private $Length;
    private $Extension;

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

    public function get($Id){
        global $pdo;

        $q  = "SELECT * FROM File WHERE File_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if($st->execute() != null){
            if($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
            }
        }
    }
    /** end public functions */

    /**creates a new file and populates the database
     *
     * @todo create a way to get song length
     * @param $CreatedBy the ID of the creator
     * @param $File the temporary link to the file being uploaded
     * @param $From the class for which the file upload is performed
     * @param $Type "Audio" or "Image"
     *
     * @return file object
     */
    //$_FILES['userfile']['tmp_name'] is how you get the file from the client side
    public static function create($File){
        global $pdo;
        $user = checksession();
        $created = getDateTime();
        if (checkIntegrity($File, $Type) && $user != false) {
            $token = generateToken();
            $ext = pathinfo($File, PATHINFO_EXTENSION);
            $name = pathinfo($File, PATHINFO_BASENAME);
            $uploadDirectory = FILE_PATH . "$From/$Type/";
            $link = $uploadDirectory."$token.$name.$ext";



            $q = 'INSERT INTO file (Link, Created, CreatedBy, Length) VALUES (:li, :c, :cb, :le)';
            $st = new $pdo->prepare($q);
            $st->bindparam(":li", $link);
            $st->bindparam(":c", $created);
            $st->bindparam(":cb", $user->User_ID);
           // $st->bindparam(":le",$length);
            if($st->execute()) {
                move_uploaded_file($File, $uploadDirectory);
                return new File($pdo->lastInsertId());
            }else{
                return false;
            }
        }
    }

    /**
     * compares the file type to the the Type specified by the calling class
     * this gives basic security and error checking to our site. for example,
     * MP3 files cannot be uploaded as images because this function will catch it
     * @param $File the file to be analysed
     * @param $Type the type specified by the calling class
     * @return true if good integrity, false if not.
     */
    public static function checkIntegrity($File, $Type){
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type
        $return = false;
        if ($Type == "image") {
            if (finfo_file($finfo, $File) == "image/png") {
                $return = true;
            } else {
                $return = false;
            }
        }

        if(Type =="song"){
            if(finfo_file($finfo, $File) == "audio/mp3"){
                $return = true;
            }else {
                $return = false;
            }
        }
        finfo_close($finfo);
        return $return;

    }
}
?>