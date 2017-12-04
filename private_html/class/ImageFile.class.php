<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 12/1/2017
 * Time: 1:04 PM
 */

class ImageFile extends File
{


    public function __construct($Id){
        parent::construct($Id);
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
        return ;
    }
    public function get($Id){
        global $pdo;

        $q  = "SELECT * FROM File INNER JOIN ImageFile on File.File_ID = ImageFile.File_FK WHERE File_ID = :id";

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if($st->execute() != null){
            if($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
            }
        }
    }
}