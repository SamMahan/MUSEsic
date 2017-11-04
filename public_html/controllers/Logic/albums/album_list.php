<?PHP

require_once "../../../../private_html/config.inc.php";
$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if ($_POST == null){
for($i=0; $i<12; $i++){
    array_push($successArray, "");
    array_push($populateArray, "placeholder='enter info'");
}


}

if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
        if ($value === "") {
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        } elseif ($value != "") {
            array_push($successArray, "has-success");
            array_push($populateArray, "value='$value'");

        }
    }
    if ($_POST["album_name"] != null || $_POST["number_songs"] != null || $_POST["play_time"] != null || $_POST["release_date"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = true;
    }
    if ($_POST["album_name"] != null && $_POST["number_songs"] != null && $_POST["play_time"] != null && $_POST["release_date"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = false;
        $display = true;
    }
}
$listOfAlbums= getAlbums();
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign("listOfAlbums", $listOfAlbums);
$smarty->assign('pageTarget', "album_list");
$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign('modal', $modal);

$smarty->display("albums/album_list.tpl");

?>