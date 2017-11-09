<!DOCTYPE html>
<html>
<?php

require_once "../../../../private_html/config.inc.php";

$successArray=array();
$populateArray=array();
$lsuccessArray = array();
$lpopulateArray = array();
$loginComplete;
$registerComplete;
$loginSuccess;
$registerSuccess;
$loginModalActivate = "";






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
if($registerComplete == true && $_POST["password"] == $_POST['confirm-password']){
    echo  $_POST["password"]." ".$_POST['confirm-password'];
    $registerSuccess = register($_POST["password"], $_POST['first_name'], $_POST['last_name'], $_POST['email'], false);
    if($registerSuccess != false){
        $successArray = SplFixedArray(10);
        $populateArray = SplFixedArray(10);
    }else{

    }

}
//if login form complete
if($loginComplete === true){
    $loginSuccess = login($_POST['login-email'], $_POST['login-password']);
        if($loginSuccess!= false){
            $loginModalActive = "";
        header("Location:".WEB_URL."/controllers/Logic/user/home.php");
        $loginModalActive ="";
        $lsuccessArray = SplFixedArray(10);
        $lpopulateArray = SplFixedArray(10);
    }else{

    }
}
echo "assignments begining";

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign("lsuccessArray", $lsuccessArray);
$smarty->assign("lpopulateArray", $lpopulateArray);
$smarty->assign('modal', $modal);
$smarty->assign("loginModalActive", $loginModalActive);
echo "assigns done";
$smarty->display("visitor/registration.tpl") == false;


?>



<!-- Created by Samuel Mahan
9/20/17
registration page -->

