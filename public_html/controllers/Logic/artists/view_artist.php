<?PHP

require_once "../../../../private_html/config.inc.php";
$user = sessioncheck();
$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if ($_POST == null){

}

if (isset($_POST["artist_name"])){
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
    if($_POST["artist_name"]!=null || $_POST["popular_song"] !=null || $_POST["number_songs"] !=null || $_POST["number_albums"] !=null){
        $modal = "data-modalpost = 'active'";
        $error = true;

    }
    if($_POST["artist_name"]!=null && $_POST["popular_song"] !=null && $_POST["number_songs"] !=null && $_POST["number_albums"] !=null){
        $modal = "data-modalpost = 'active'";
        $error = false;
        $display = true;
        $successArray= new SplFixedArray(10);
        $populateArray=new SplFixedArray(10);

    }
}

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

else{
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);
}
$smarty->assign("user",$user);
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign('pageTarget', "view_album");

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);

$smarty->assign('modal', $modal);


$smarty->display("artists/view_artist.tpl");

?>