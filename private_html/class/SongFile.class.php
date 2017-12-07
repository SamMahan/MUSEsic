<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/1/2017
 * Time: 1:21 PM
 */

class SongFile extends File
{
    private $Length;

    public function __construct($Id)
    {
        parent::__construct($Id);
        $row = $this->get($Id);
        if(!$row){
            return false;
            echo "songfile failed to construct: $Id:";
        }
        foreach($row as $colName => $value){
            parent::__set($colName, $value);
    }

    }
    //@Override
    public function get($Id)
    {
        global $pdo;

        $q = "SELECT * FROM File INNER JOIN Song_File ON File.File_ID = Song_File.File_FK WHERE File_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if ($st->execute() != null) {
            if ($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
                return $row;
            }
        }
    }
    /** end public functions */
    /**
     * @param $File the file
     * @param $Type
     */
    public static function create($File, $From, $Type)
    {
        global $pdo;
        echo $File;
        $super = parent::create($File, $From, $Type);
        $link = $super->Link;
        $linkLength = strlen($link);
        $link2 = substr($link, 0, $linkLength-3);
        $link2 = $link2."mp3";
        echo"link: $link2";
        rename($link, $link2);
        $super->Link = $link2;

        $file = new MP3file($link2);

        $length = $file->getDuration();

        //begin insertion into the songFile
        $q = "INSERT INTO song_file (Length, File_FK) Values(:l, :fk)";
        $st = $pdo->prepare($q);
        $st->bindparam(":l", $length);
        $st->bindParam(":fk", $super->File_ID);
        if($st->execute()){
            return new SongFile($super->File_ID);

        }

    }
}