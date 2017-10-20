<!DOCTYPE html>
<html>
<?php
require_once "../private_html/config.inc.php";
$successArray=array();
$populateArray=array();

if ($_POST == null){

}else echo "has-success";
if ($_POST != null){
    foreach($_POST as $value){
        
        if($value===""){
            array_push($successArray, "has-warning");
            array_push($populateArray, "");
        }
        
        elseif($value != ""){
            array_push($successArray, "has-success");
            array_push($populateArray, "value=".$value);
   
        }
}

}
if($_POST["login-email"]!=null || $_POST["login-password"] !=null){
    $modal = "data-modalpost = 'active'";
}
$smarty->assign("successarray", $successarray);
$smarty->assign("populateArray", $populatearray);
$smarty->assign('modal', $modal);
$smarty->display("visitor/registration.tpl");


?>



<!-- Created by Samuel Mahan
9/20/17
registration page -->

