<?php
    $dbcon = mysqli_connect('localhost','root','','logindb');
    if (mysqli_connect_errno()) {
        echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้".mysql_connect_error();
    }
    mysqli_set_charset($dbcon,'utf8');
?>