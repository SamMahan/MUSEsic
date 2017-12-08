<?PHP

require_once "../../../../private_html/config.inc.php";
$playlist_id = $_GET["key"];
$playlist = new Playlist($playlist_id);

$user = sessioncheck();
$smarty->assign("playlist", $playlist);
$smarty->assign("user",$user);
$smarty->display("playlists/view.tpl");
?>