<?php
function e($str,$charset='utf-8'){
    print htmlspecialchars($str,ENT_QUOTES,$charset);
}
