<?php
/**
 * Created by PhpStorm.
 * User: sfmah
 * Date: 11/9/2017
 * Time: 6:23 PM
 */

class User
{

    private $User_ID;
    private $Password;
    private $Salt;
    private $First_Name;
    private $Last_Name;
    private $Email;
    private $IsAdmin;


    public function __construct($Id){
        global $pdo;

        $q  = 'SELECT * FROM User WHERE User_ID = :id';

        $st = $pdo->prepare($q);

        //$st->bindParam(":id", $Id);


        $row = $st->fetch(PDO::FETCH_ASSOC);


       // $row = self::get($Id);
        foreach($row as $colName =>$value){
            $this->__set($colName, $value);
        }
    }
    public function __get($colName){
        if(property_exists('User', $colName)){
            return $this->$colName;

        }
    }
    public function __set($colName, $value){
        if(property_exists("User", $colName)){
            if ($colName == "User_ID" || $colName == "Password" || $colName == "Salt" ) {
                return false;
            }
        }
        return false;
    }
    public function get($Id){
        global $pdo;

        $q  = 'SELECT * FROM User WHERE User_ID = :id';

        $st = $pdo->prepare($q);

        $st->bindParam(":id", $Id);
        if($st->execute() != null){
            if($st->rowcount() == 1) {
                $row = $st->fetch(PDO::FETCH_ASSOC);
                return $row;
                echo $row;
            }
        }
        return false;
        echo "from user class";
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

    public static function create($First_Name, $Last_Name, $Password, $Email, $IsAdmin = false){
        global $pdo;
        echo "got to create";
        $q = "Insert INTO musesicDB.User (First_Name, Last_Name, Password, Email, Is_Admin)
          VALUES(:fn, :ln, :p, :e, :ia)";
        $st = $pdo->prepare($q);
        $st->bindParam(":fn", $First_Name);
        $st->bindParam(":ln", $Last_Name);
        $st->bindParam(":p", $Password);
        $st->bindParam(":e", $Email);
        $st->bindParam(":ia", $IsAdmin);
        $st->execute();
        if($User = new User($pdo->lastInsertId ())){
            echo "true!!";
            return $User;
        }else{
            echo "login failure";
            return false;
        }
    }
    public static function login($email, $password){
        global $pdo;
        $q = "SELECT First_Name FROM User WHERE Email = :e AND Password = :p";
        echo "logging in...";
        // $st = $pdo;
        $st = $pdo->prepare($q);
        $st->bindParam(":p", $password);

        $st->bindParam(":e", $email);

        $st->execute();

        $row = $st->fetch(PDO::FETCH_ASSOC);
        if(isset($row['User_ID'])){
            echo "id found";
            return new User($row['User_ID']);
        }else{
            echo $row;
            return false;
        }

    }


}
