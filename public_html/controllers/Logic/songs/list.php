<?PHP

require_once "../../../../private_html/config.inc.php";
require_once PRIVATE_PATH . "dbconfig.inc.php";
$listOfSongs= getSongs();
$smarty->assign("listOfSongs", $listOfSongs );
$smarty->display("songs/list.tpl");
echo "hello";




?>