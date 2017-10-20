<?php

require_once "../../../../private_html/config.inc.php";
$smarty = new Smarty();

$smarty->setTemplateDir("../../templates/Albums/");

$smarty->setCompileDir("../../templates_c");
$smarty->setCacheDir("../../../../cache");
$smarty->setConfigDir("../../../../configs");

$smarty->display('Album-list.tpl');
?>