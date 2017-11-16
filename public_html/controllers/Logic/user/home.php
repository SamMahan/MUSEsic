<?PHP


    require_once "../../../../private_html/config.inc.php";
    $userId = sessioncheck();

        $user = new User($userId);
        $smarty->assign("user", $user);
        $smarty->display("user/profile.tpl");


?>