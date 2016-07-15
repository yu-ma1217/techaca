<?php

require_once 'DbManager.php';
require_once 'MySmarty.class.php';
$smarty = new MySmarty();

try{
    $db = getDb();

    $sql = 'select * from post';
    foreach ($db->query($sql) as $row) {
        print($row['id'].',');
        print($row['contents'].',');
        print($row['user_id']);
        print('<br />');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$db = NULL;
$smarty->display('posttest.tpl');

?>
