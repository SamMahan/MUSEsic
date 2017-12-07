<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/23/2017
 * Time: 11:52 AM
 */

class File
{
    protected $File_ID;
    protected $Link;
    protected $Created;
    protected $Created_By;
    protected $Modified;
    protected $Modified_By;
   //private $Length;
    private $Extension;

    public function __construct($Id){
        $row = self::get($Id);
        if(!$row) {
            return false;
        }
            foreach ($row as $colName => $value) {
                $this->__set($colName, $value);
            }

    }
    public function __get($colName){
        if(property_exists("File",$colName)){
            return $this->$colName;

        }
    }
    public function __set($colName, $value){
        if(property_exists("File",$colName)){
            $this->$colName = $value;
        }
        return false;
    }

    public function get($Id){
        global $pdo;

        $q  = "SELECT * FROM File WHERE File_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if($st->execute() != null){
            if($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
                return $row;
            }
        }
        return false;
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
    public static function create($File, $From, $Type){
        global $pdo;
        $user = sessioncheck();

        $id = $user->User_ID;
        $created = getDateTime();
        if ( $user instanceof User) {
            $token = generateToken();
            $ext = pathinfo($File, PATHINFO_EXTENSION);
            echo "EXT: $ext";
            $name = pathinfo($File, PATHINFO_BASENAME);

            echo": Basename: $name";
            $uploadDirectory = FILE_PATH . $From.DIRECTORY_SEPARATOR.$Type.DIRECTORY_SEPARATOR;
            $link = $uploadDirectory."$token.$name";



            $q = 'INSERT INTO file (Link, Created, CreatedBy) VALUES (:li, :c, :cb)';
            $st = $pdo->prepare($q);
            $st->bindparam(":li", $link);
            $st->bindparam(":c", $created);
            $st->bindparam(":cb",$id);
           // $st->bindparam(":le",$length);
            if($st->execute()) {
                move_uploaded_file($File, $link);
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