<?PHP

require_once "../../../../private_html/config.inc.php";


$songKey = $_GET['key'];
$songArray = getSongById($songKey);
$smarty->assign('$songArray', $songArray);
$smarty->display("songs/view.tpl");
?>