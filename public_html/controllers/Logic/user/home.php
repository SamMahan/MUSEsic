<?PHP

<<<<<<< HEAD
require_once "../../../../private_html/config.inc.php";
$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if (isset($_POST["playlist_name"])) {
    foreach ($_POST as $key => $value) {
        if ($value === "") {
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        } elseif ($value != "") {
            array_push($successArray, "has-success");
            array_push($populateArray, "value='$value'");

        }
    }
    if ($_POST["playlist_name"] == null) {
        $modal = "data-modalpost = 'active'";
        $error = true;
    }
    if ($_POST["playlist_name"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = false;
        $display = true;
        $successArray = new SplFixedArray(10);
        $populateArray = new SplFixedArray(10);


    }
} else{
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);
=======

    require_once "../../../../private_html/config.inc.php";
    $userId = sessioncheck();

        $user = new User($userId);
        $smarty->assign("user", $user);
        $smarty->display("user/profile.tpl");

>>>>>>> 249adff879bfabd88087b5320f2e5846f6762590

}
$smarty->assign("error", $error);
$smarty->assign("display", $display);

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);

$smarty->assign('modal', $modal);

$smarty->display("user/profile.tpl");
?>
