<?php 
$dbcon = mysqli_connect("localhost","root","","logindb") or die(mysqli_error());
if (mysqli_connect_error()){
    echo"ไม่สามารถติดต่อฐานข้อมูลได้";
}
mysqli_set_charset($dbcon,'utf8');
    $hen = $_POST['id'];
    $date = $_POST['date'];
    $open = $_POST['open'];
    $max = $_POST['max'];
    $min= $_POST['min'];
    $close = $_POST['close'];
    $avg = $_POST['avg'];
    $change = $_POST['change'];
    $perchange = $_POST['per'];

    
    $q= "UPDATE `hoon` SET `P_Date`='$date' `P_Open`='$open',`P_Max`='$max',`P_Min`='$min',`P_Close`='$close',`P_Avg`='$avg',`P_Change`='$change',`P_PerChange`='$perchange' WHERE P_ID='$hen'";
    // UPDATE `hoon` SET `P_Open`='$open',`P_Max`='$max',`P_Min`='$min',`P_Close`='$close',`P_Avg`='$avg',`P_Change`='$change',`P_PerChange`='$perchange' WHERE P_ID='$hen'
    $re = mysqli_query($dbcon,$q);
    header("Location:main.php");
?>