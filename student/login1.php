<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$name=$_POST['name'];
$psw=$_POST['psw'];
if($name=="AAMEC" AND $psw=="AAMEC")
{
header("location:select.php");
}
else
{
echo "<script>alert('Invalid Username or Password')</script>"; 
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Student Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="sub_ins.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>

    <form class="form-signin text-center" style="padding-top:0px" method="post">
    <br><br><br><br><br><br><br>
      <h1 class="h2 mb-3 font-weight-normal" style="padding-bottom:20px">Please Sign In...</h1>
      <label for="uname"  class="sr-only">Username</label>
      <input type="text" id="uname" class="form-control" placeholder="Username" name="name" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="psw" placeholder="Password" required>
	  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In">
	  <p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
    </form>
  </body>
</html>
