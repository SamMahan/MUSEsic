<?PHP

require_once "../../../../private_html/config.inc.php";

$user = sessioncheck();
$successArray = array();
$populateArray = array();
$modal = "";
$error = false;
$display = false;
$key = $_GET["key"];

if (isset($_POST["review"])) {
    if ($_POST["review"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = true;

    }
    if ($_POST["review"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = false;
        $display = true;
        $successArray = new SplFixedArray(10);
        $populateArray = new SplFixedArray(10);
    }
}

$songArray = getSongById($key);
$smarty->assign("songArray", $songArray);
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign('pageTarget', "list");

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign("user",$user);
$smarty->assign('modal', $modal);

$smarty->display("songs/view.tpl");

?>