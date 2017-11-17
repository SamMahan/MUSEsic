<?PHP
require_once "../../../../private_html/config.inc.php";
$user = sessioncheck();
$smarty->assign("user",$user);
$smarty->display("playlists/view.tpl");
?>