<?PHP

require_once "../../../../private_html/config.inc.php";
$successArray=array();
$populateArray=array();
$modal = "";

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
    if($_POST["album_name"]!=null || $_POST["number_songs"] !=null || $_POST["play_time"] !=null || $_POST["release_date"] !=null){
        $modal = "data-modalpost = 'active'";


    }

}
$smarty->assign('pageTarget', "album_list");
$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign('modal', $modal);


$smarty->display("albums/album_list.tpl");
?>