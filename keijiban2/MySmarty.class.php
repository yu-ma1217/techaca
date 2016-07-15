<?php
require_once './libs/Smarty.class.php';

class MySmarty extends Smarty{
    public function __construct(){
        parent::__construct();
        $this->escape_html = true;
    }
} ?>
