<?PHP

require_once "../../../../private_html/config.inc.php";

$user = sessioncheck();
$successArray = array();
$populateArray = array();
$modal = "";
$display = false;

if ($_POST == null){

}

if (isset($_POST["title"])){
    foreach($_POST as $key=>$value){
        if($value===""){
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        }

        elseif($value != ""){
            array_push($successArray, "has-success");
            array_push($populateArray, "value='$value'");

        }
    }
    if($_POST["title"]!=null || $_POST["artist_name"] !=null || $_POST["genre"] !=null){
        $modal = "data-modalpost = 'active'";

    }

    if($_POST["title"]!=null && $_POST["artist_name"] !=null && $_POST["genre"] !=null){
        $modal = "data-modalpost = 'active'";
        $successArray= new SplFixedArray(10);
        $populateArray=new SplFixedArray(10);
        $display = true;

    }

}

else{
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);
}

$song_id = $_GET["key"];
$song = new Song($song_id);
$artist = new Artist($song->Artist_FK);
$album = new Album($song->Album_FK);


$smarty->assign("song", $song);
$smarty->assign("artist", $artist);
$smarty->assign("album", $album);
$smarty->assign("display", $display);
$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign('modal', $modal);
$smarty->assign("user",$user);
$smarty->display("songs/update.tpl");
?>