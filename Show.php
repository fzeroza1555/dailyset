
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="CSS.css"> -->
    <title>Document</title>
</head>
<body>
<!-- <div id="fullscreen_bg" class="fullscreen_bg"/> -->

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "logindb";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn,"utf8");
	$sql = "SELECT * FROM hoon";

	$query = mysqli_query($conn,$sql);
?>
<table class="table table-dark">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Date</th>
    <th scope="col">Open</th>
    <th scope="col">Max</th>
    <th scope="col">Min</th>
    <th scope="col">Close</th>
    <th scope="col">Avg</th>
    <th scope="col">Change</th>
    <th scope="col">perChange</th>
    <th scope="col">Edit</th>
  </tr>
</thead>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
 <tbody>
 <tr>
   <td><?php echo $result['P_ID']?></td>
   <td><?php echo $result['P_Name']?></td>
   <td><?php echo $result['P_Date']?></td>
   <td><?php echo $result['P_Open']?></td>
   <td><?php echo $result['P_Max']?></td>
   <td><?php echo $result['P_Min']?></td>
   <td><?php echo $result['P_Close']?></td>
   <td><?php echo $result['P_Avg']?></td>
   <td><?php echo $result['P_Change']?></td>
   <td><?php echo $result['P_PerChange']?></td>
   <td><a href="update.php?P_ID=<?php echo $result['P_ID'] ?>">แก้ไขข้อมูล</a></td>
 </tr>
</tbody>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
