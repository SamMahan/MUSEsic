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
        $row = get($Id);
        foreach($row as $colName => $value){
            $this->set($colName, $value);
    }

    }

    public function get($Id)
    {
        global $pdo;

        $q = "SELECT * FROM File INNER JOIN SongFile ON File.File_ID = SongFile.File_FK WHERE File_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if ($st->execute() != null) {
            if ($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
            }
        }
    }
    /** end public functions */
    /**
     * @param $File the file
     * @param $Type
     */
    public static function create($File)
    {
        global $pdo;


        $file = new MP3File($File);
        $length = file.getDuration();
        parent::create($File);

        //begin insertion into the songFile
        $q = "INSERT INTO songfile (Length, File_FK) Values(:l, :fk)";
        $st = $pdo->prepare($q);
        $st->bindparam(":l", $length);
        $st->bindParam(":fk", $pdo->lastInsertId());
        $st->execute();

    }
}