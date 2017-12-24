<?php 
    session_start();
    if(!isset($_SESSION['login_id'])){
        header("Location : index.php");
    }
    $dbcon = mysqli_connect("localhost","root","","logindb") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"ไม่สามารถติดต่อฐานข้อมูลได้";
    }
    mysqli_set_charset($dbcon,'utf8');
    $session_login_id = $_SESSION['login_id'];

    $qre_user = "SELECT * FROM tb_login WHERE login_id='$session_login_id'";
    $result_user = mysqli_query($dbcon,$qre_user);
    if($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $s_login_username = $row_user['login_username'];
        $s_login_email = $row_user['login_email'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css"> 
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="main.php">Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link fa fa-user-circle" href="index.php"> <?php echo"$s_login_username";?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link fa fa-sign-in" href="logout.php"> ลงชื่อออก</a>
            </li>
          </ul>
        </div>
      </nav>
    <br><br><br>
      
       
    <div class="container">
    <h1>เพื่มข้อมูล</h1>
        <form action="insertdata.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" aria-describedby="id" placeholder="x">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <textarea class="form-control" name="name" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" name="date" aria-describedby="date" placeholder="yyyy/mm/dd">
            </div>
            <div class="form-group">
                <label for="open">Open</label>
                <input type="text" class="form-control" name="open" aria-describedby="open" placeholder="x.xx">
            </div>
            <div class="form-group">
                <label for="max">Max</label>
                <input type="text" class="form-control" name="max" aria-describedby="max" placeholder="x.xx">
            </div>
            <div class="form-group">
                <label for="min">Min</label>
                <input type="text" class="form-control" name="min" aria-describedby="min" placeholder="x.xx">
            </div>
            <div class="form-group">
                <label for="close">Close</label>
                <input type="text" class="form-control" name="close" aria-describedby="close" placeholder="x.xx">
            </div>
            <div class="form-group">
                <label for="avg">Avg</label>
                <input type="text" class="form-control" name="avg" aria-describedby="avg" placeholder="x.xx">
            </div>
            <div class="form-group">
                <label for="change">Change</label>
                <input type="text" class="form-control" name="change" aria-describedby="change" placeholder="x.xx">
            </div>
            <div class="form-group">
                <label for="per">PerChange</label>
                <input type="text" class="form-control" name="per" aria-describedby="per" placeholder="x.xx">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br><br><br>
    <div style="background-color:black;">
    <footer class="container" style="color:wheat;">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; froz &middot; </p>
    </footer>   
    </div> 
    
</body>

</html>