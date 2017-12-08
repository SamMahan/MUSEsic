<?PHP

require_once "../../../../private_html/config.inc.php";

$user = sessioncheck();
$successArray = array();
$populateArray = array();
$modal = "";
$error = false;
$display = false;
$key = $_GET['key'];

if (isset($_POST["album_name"])) {
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
        $successArray = new SplFixedArray(10);
        $populateArray = new SplFixedArray(10);


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

$albumObj = new Album($key);

//$songs = $albumObj->getSongs();
$listOfAlbums = getAlbums();
$album = getAlbumById($key);
$author = new User($albumObj->CreatedBy);
//$smarty->assign("songs", $songs);
$smarty->assign("author", $author);
$smarty->assign("album", $album);
$smarty->assign("user", $user);
$smarty->assign("error", $error);
$smarty->assign("display", $display);
$smarty->assign("listOfAlbums", $listOfAlbums);
$smarty->assign('pageTarget', "album_list");

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);

$smarty->assign('modal', $modal);

$smarty->display("albums/view_album.tpl");
?>