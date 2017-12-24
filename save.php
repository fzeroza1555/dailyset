<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "logindb";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$sql = "UPDATE hoon SET 
            P_Date = '$_POST[txtDate]',
			P_Open = '$_POST[txtOpen]',
			P_Max =  '$_POST[txtMax]',
            P_Min = '$_POST[txtMin]',
            P_Close = '$_POST[txtClose]',
            P_Avg = '$_POST[txtAvg]',
            P_Change = '$_POST[txtChange]' ,
            P_PerChange = '$_POST[txtPer]' ,
			WHERE P_ID = '$_POST[txtPID]'";

	$query = mysqli_query("UPDATE * FROM hoon ORDER BY P_ID DESC");
	

	if($query) {
     	echo "Record update successfully";
	}else 
		echo "Fail";
	
	mysqli_close($conn);
?>
</body>
</html>