<?php 
    $host ='localhost';//เชื่อม db
    $user = 'root';
    $pass ='';
    $dbname ='logindb';
    $con = mysqli_connect($host,$user,$pass,$dbname);
    mysqli_set_charset($con,"utf8");

    $pid  = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $open = $_POST['open'];
    $max = $_POST['max'];
    $min= $_POST['min'];
    $close = $_POST['close'];
    $avg = $_POST['avg'];
    $change = $_POST['change'];
    $perchange = $_POST['per'];

    $srtquery = "INSERT INTO  hoon  VALUE ('$pid','$name','$date','$open','$max','$min','$close','$avg','$change','$perchange')";//เพื่มข้อมูล
    $result = mysqli_query($con,$srtquery);
    header("Location:main.php");
    

?>