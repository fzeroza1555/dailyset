<?php
 require 'connectdb.php';
 $login_username = $_POST['username'];
 $login_password = $_POST['password'];
 $login_email = $_POST['email'];
 $salt = '123456';
 $hash_login_password = hash_hmac('sha256',$login_password,$salt);

 $query = "INSERT INTO tb_login (login_username,login_password,login_email) VALUE ('$login_username','$hash_login_password','$login_email')";
 $result= mysqli_query($dbcon,$query);
 if($result){
     header('Location:index.php');
 }else{
     echo "เกิดข้อผิดพลาด ".mysqli_error($dbcon);
 }
?>