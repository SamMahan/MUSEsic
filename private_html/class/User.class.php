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

       $row = self::get($Id);
       if($row != null) {
           foreach ($row as $colName => $value) {
               $this->__set($colName, $value);

           }
       }
    }
    public function __get($colName){
        if(property_exists('User', $colName)){
            return $this->$colName;

        }
    }
    public function __set($colName, $value){
        if(property_exists("User", $colName)){
           if($value!= null) {
               $this->$colName = $value;
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

            }
        }
        return false;

    }



    /** end public functions */
    //takes in an array of values. if those values are valid column names, it updates the columns automatically
    //adapts to any array size, can be used for one or all values
    public function setVal($values){
        global $pdo;
        $pholderKeys = array();
        $colKeys = array();
        $inputs = array();
        $setString[] = array();
        $inputString = null;
        foreach($values as $key =>$value) {
            if($value != "" && $value != null) {
                //create unique number designation for each value
                $pholderKeys[] = ":" . $key;
                $colKeys[] = $key;
                $finalValues[] = $value;
                $setString[]="$key = :$key";
            }

        }
        $inputString = implode(",",$setString);
        $inputString = substr($inputString, 6);
        $columnString = implode(",",$colKeys);
        $placeholderString = implode(",", $pholderKeys);
        //echo $placeholderString."->".$columnString;
    //    echo "     ".implode(",",$pholderKeys);
    //    echo "     ".implode(",",$colKeys);
        //echo"     setstring->$inputString";

        $q = "UPDATE musesicDB.User SET $inputString WHERE User_ID = :id";
        //counter
        $i = 0;
        $st = $pdo->prepare($q);
        foreach($values as $key=>$value){
            if($value != "" && $value != null) {
                $st->bindParam($pholderKeys[$i], $finalValues[$i]);
                $i = $i + 1;
            }
        }
        $st->bindParam(":id", $this->User_ID);
        return $st->execute();
        
    }

    /** end of public functions  */
    /** creates a new user object from inputs and insterts them into the database
     * @param $First_Name
     * @param $Last_Name
     * @param $Password
     * @param $Email
     * @param bool $IsAdmin
     * @return bool|User
     */
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
        echo $st->execute();
        $Id = $pdo->lastInsertId();
        if($User = new User($Id)){

            return $User;
        }else{
            echo "register failure";
            return false;
        }
    }

    /**
     * @param $email
     * @param $password
     * @return bool|User
     */
    public static function login($email, $password){
        global $pdo;
        $q = "SELECT * FROM musesicDB.User WHERE Email = :e AND Password = :p";
        echo "logging in...";
        // $st = $pdo;
        $st = $pdo->prepare($q);
        $st->bindParam(":p", $password);

        $st->bindParam(":e", $email);

        $st->execute();
        echo "execute done";
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
