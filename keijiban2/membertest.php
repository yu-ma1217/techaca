<?php

require_once 'DbManager.php';
require_once 'MySmarty.class.php';
$smarty = new MySmarty();

try{
    $db = getDb();

    $sql = 'select * from member';
    foreach ($db->query($sql) as $row) {
        print($row['id'].',');
        print($row['name'].',');
        print($row['password']);
        print('<br />');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$db = NULL;
$smarty->display('membertest.tpl');

?>
