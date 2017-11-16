<?PHP

require_once "../../../../private_html/config.inc.php";
$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if (isset($_POST["song_name"])) {
    foreach ($_POST as $key => $value) {
        if ($value === "") {
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        } elseif ($value != "") {
            array_push($successArray, "has-success");
            array_push($populateArray, "value='$value'");

        }
    }
    if ($_POST["song_name"] != null || $_POST["artist"] != null || $_POST["album"] != null || $_POST["length"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = true;
    }
    if ($_POST["song_name"] != null && $_POST["artist"] != null && $_POST["album"] != null && $_POST["length"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = false;
        $display = true;
        $successArray = new SplFixedArray(10);
        $populateArray = new SplFixedArray(10);

     addSong($_POST["song_name"], $_POST["length"], $_POST["artist"], $_POST["album"]);

    }
} else {
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);
}
$listOfSongs = getSongs();
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign("listOfSongs", $listOfSongs);
$smarty->assign('pageTarget', "song_list");

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);

$smarty->assign('modal', $modal);

$smarty->display("songs/list.tpl");



?>
