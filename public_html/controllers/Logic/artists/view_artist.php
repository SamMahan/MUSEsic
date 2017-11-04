<?PHP

require_once "../../../../private_html/config.inc.php";

$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if ($_POST == null){

}

if (isset($_POST)){
    foreach($_POST as $key=>$value){
        if($value==="") {
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        }

        elseif($value != ""){
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
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign('pageTarget', "view_artist");
$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign('modal', $modal);


$smarty->display("artists/view_artist.tpl");

?>