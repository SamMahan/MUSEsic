<!DOCTYPE html>
<html>
<?php
require_once "../../../../private_html/config.inc.php";
$successArray=array();
$populateArray=array();
$lsuccessArray = array();
$lpopulateArray = array();
$loginSuccess;





if ($_POST == null){

}
if ($_POST != null){
    if(isset($_POST["first_name"])) {
        $registerSuccess = true;
        foreach ($_POST as $key => $value) {

            if ($value === "") {
                array_push($successArray, "has-warning");
            $registerSuccess = false;
                array_push($populateArray, "this has nothing");

            } elseif ($value != "") {
                array_push($successArray, "has-success");
                array_push($populateArray, "value=" . $value);

            }
        }
    }else{
        $loginSuccess = true;
        foreach ($_POST as $key => $value) {
            if ($value === "") {
                array_push($lsuccessArray, "has-warning");
                $loginSuccess = false;
                array_push($lpopulateArray, "this has nothing");

            } elseif ($value != "") {
                array_push($lsuccessArray, "has-success");
                array_push($lpopulateArray, "value=" . $value);


            }
        }
    }
}


if($_POST["login-email"]!=null || $_POST["login-password"] !=null){
    $modal = "data-modalpost = 'active'";
}
if($registerSuccess == true && $_POST["password"] == $_POST['confirm-password']){
    echo  $_POST["password"]." ".$_POST['confirm-password'];
    register($_POST["password"], $_POST['first_name'], $_POST['last_name'], $_POST['email'], false);

}
if($loginSuccess === true){
        if(login($_POST['login-email'], $_POST['login-password']) == true){
        header("Location:".WEB_URL."/controllers/Logic/user/home.php");
    }else{
        echo "nologin";
    }
}


$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign("lsuccessArray", $lsuccessArray);
$smarty->assign("lpopulateArray", $lpopulateArray);
$smarty->assign('modal', $modal);
$smarty->display("visitor/registration.tpl");


?>



<!-- Created by Samuel Mahan
9/20/17
registration page -->

