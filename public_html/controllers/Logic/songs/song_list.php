<?PHP

require_once "../../../../private_html/config.inc.php";
$user = sessioncheck();

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

     Song::create($_POST["song_name"], $_POST["album"],null,null, $_FILES["song_upload"]["tmp_name"]);
        echo $_FILES["song_upload"]['tmp_name'];
    }
} else {
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);
}
$list_of_playlists = $user->getPlaylists();
$listOfSongs = getSongs();
$smarty->assign("list_of_playlists", $list_of_playlists);
$smarty->assign("user",$user);
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign("listOfSongs", $listOfSongs);
$smarty->assign('pageTarget', "song_list");

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);

$smarty->assign('modal', $modal);

$smarty->display("songs/list.tpl");



?>
