<?PHP
require_once "../../../../private_html/config.inc.php";

$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if (isset($_POST["artist_name"])){
    foreach ($_POST as $key=>$value){
        if ($value === "") {
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

        addArtist($_POST["artist_name"]);

    }


}else{
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);
}

$listOfArtists= getArtists();
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign('modal', $modal);
$smarty->assign("listOfArtists", $listOfArtists);

$smarty->display("artists/artist_list.tpl");
?>