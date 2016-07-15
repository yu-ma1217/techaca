<?php
require_once 'MySmarty.class.php';

$smarty = new MySmarty();

$smarty->assign('title','smartytest');
$smarty->assign('msg','good morning');

$smarty->display('test.tpl');
 ?>
