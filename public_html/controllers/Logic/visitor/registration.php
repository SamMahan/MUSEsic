<!DOCTYPE html>
<html>
<?php

require_once "../../../../private_html/config.inc.php";
logout();
$successArray=array();
$populateArray=array();
$lsuccessArray = array();
$lpopulateArray = array();
$loginComplete = false;
$registerComplete = false;
$loginSuccess = false;
$registerSuccess = null;
$loginModal = "";

$errorMessage = "";




//echo "start";
if ($_POST != null){
    if(isset($_POST["first_name"])) {

        $registerComplete = true;
        foreach ($_POST as $key => $value) {

            if ($value === "") {
                array_push($successArray, "has-warning");
            $registerComplete = false;

                array_push($populateArray, "this has nothing");

            } elseif ($value != "") {
                array_push($successArray, "has-success");
                array_push($populateArray, "value=" . $value);


            }
        }
    }if(isset($_POST['login-email'])){
        $loginComplete = true;
        $loginModalActive = "style = 'display:block'";
        foreach ($_POST as $key => $value) {
            if ($value === "") {
                array_push($lsuccessArray, "has-warning");
                $loginComplete = false;
                array_push($lpopulateArray, "this has nothing");

            } elseif ($value != "") {
                array_push($lsuccessArray, "has-success");
                array_push($lpopulateArray, "value=" . $value);



            }
        }
    }
}

//if form complete, sends and checks it against database


if($registerComplete == true){
    if($_POST["password"] == $_POST['confirm-password']) {
       // echo "this is the registration page";
        $registerSuccess = User::create($_POST['first_name'], $_POST['last_name'], $_POST["password"], $_POST['email'], false);
        if ($registerSuccess != false) {
            if (empty($_SESSION['user'])) {
                $userId = $registerSuccess->$User_ID;
                $_SESSION['user'] = $registerSuccess->User_ID;
            } else {
                unset($_SESSION['user']);
                $userId = $registerSuccess->User_ID;
                $_SESSION['user'] = $registerSuccess->User_ID;
            }

            header("Location:" . WEB_URL . "controllers/logic/user/home.php");
        } else {


        }
        //if passwords do not match
    }else{
        $errorMessage = "password must match confirm password";
        $successArray[3] = $successArray[4] = "has-warning";
        $populateArray[3] = $populateArray[4] = "";

}

}


//if login form complete
if($loginComplete === true){
    $loginSuccess = User::login($_POST['login-email'], $_POST['login-password']);
        if($loginSuccess!= false){
           // echo "the login was successful";
            createSession($loginSuccess->User_ID);
            $loginModalActive = "";
            header("Location:".WEB_URL."controllers/logic/user/home.php");

    }else{
    $loginModal = "in";
    $errorMessage = "invalid credentials";
    $lsuccessArray = array("has-warning", "has-warning");
    $lpopulateArray = array();
    }
}


$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign("lsuccessArray", $lsuccessArray);
$smarty->assign("lpopulateArray", $lpopulateArray);
$smarty->assign("errorMessage", $errorMessage);
$smarty->assign("registerSuccess", $registerSuccess);
$smarty->assign("registerComplete", $registerComplete);
//$smarty->assign('modal', $modal);
$smarty->assign("loginModal", $loginModal);

$smarty->display("visitor/registration.tpl");


?>



<!-- Created by Samuel Mahan
9/20/17
registration page -->

