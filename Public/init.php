<?php

//echo __DIR__;
$temp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($temp[count($temp)-1]);

define("BASE_PATH", implode(DIRECTORY_SEPARATOR, $temp));
define("PUBLIC_PATH", BASE_PATH."public");

require_once PUBLIC_PATH.DIRECTORY_SEPARATOR."Smarty-3.1.15".DIRECTORY_SEPARATOR."libs"."Smarty.class.php";




?>