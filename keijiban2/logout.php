<?php
require_once 'MySmarty.class.php';
require_once 'DbManager.php';

$smarty = new MySmarty();

session_start();

$_SESSION = array();

@session_destroy();

print "ログアウトしました";

$smarty->display('logout.tpl');
 ?>
