<?php
    ob_start();
    $conn = new mysqli('localhost','root','','macnhom6');

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = time();
    $today = date('Y-m-d H:i:s',$timestamp);
?>