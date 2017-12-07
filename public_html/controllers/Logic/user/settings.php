<?PHP

require_once "../../../../private_html/config.inc.php";

$user = sessioncheck();
$successArray = array();
$populateArray = array();
$modal = "";
$error = false;
$display = false;

//message and error used to determine f an error has occurred in the template so smarty can call it
$changePasswordMessage = "";
$changePasswordError  =false;



array_push($populateArray, $user->First_Name);
array_push($populateArray, $user->Last_Name);
array_push($populateArray, $user->Email);



    if ($_POST["first_name"] != null || $_POST["last_name"] != null || $_POST["email"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = false;
        $valueSet = array("First_Name" => $_POST["first_name"], "Last_Name" => $_POST["last_name"], "Email" => $_POST["email"]);
        $user->setVal($valueSet);
        $user->First_Name = $_POST["first_name"];
        $user->Last_Name = $_POST["last_name"];
        $user->Email = $_POST["email"];
    }



    if (isset($_POST['old_password'])){
        if($user->Password == $_POST['old_password']){

        if ($_POST['new_password'] == $_POST['confirm_password']) {
            $valueSet = array("Password" => $_POST["confirm_password"]);
            $user->setVal($valueSet);
            $display = true;
            $modal = "data-modalpost = 'active'";
            $successArray = new SplFixedArray(10);
            $populateArray = new SplFixedArray(10);
        } else {
            $changePasswordError = true;
            $changePasswordMessage = "passwords do not match!";
        }
    }
        else{
            $changePasswordError = true;
            $changePasswordMessage = "old password is incorrect!";
        }
}

$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign("user", $user);
$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign("changePasswordError", $changePasswordError);
$smarty->assign("changePasswordMessage", $changePasswordMessage);
$smarty->assign('modal', $modal);

$smarty->display("user/user_settings.tpl");
?>
