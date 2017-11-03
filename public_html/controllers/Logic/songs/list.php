<?PHP

require_once "../../../../private_html/config.inc.php";

$listOfSongs= getSongs();
$smarty->assign("listOfSongs", $listOfSongs);
$smarty->display("songs/list.tpl");

?>