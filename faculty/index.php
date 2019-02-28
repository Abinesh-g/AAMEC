<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
$name=$_POST['name'];
$psw=$_POST['psw'];
if($name=="AAMEC" AND $psw=="AAMEC")
{

header("location:main1.php");
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
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Faculty Information </title>

</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark justify-content-center" style="min-height:50px">
    <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul>
    <ul class="nav-item">
		<a class="navbar-brand justify-content-center display-0 mb-0 font-weight-normal" style="font-size:35px" href="#">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</a>
	</ul>
</nav>
    <form class="form-signin justify-content-center text-center" style="padding-top:0px" method="post"><br><br><br><br><br><br><br><br><br><br>
      <i class="fa fa-address-book-o " style="font-size:36px"></i>
      <h1 class="h2 mb-3 font-weight-normal" style="padding-bottom:0px">Faculty Information</h1>
      <label for="uname"  class="sr-only">Username</label>
      <input type="text" id="uname" class="form-control" style="height:50px;" placeholder="Username" name="name" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" style="height:50px;" name="psw" placeholder="Password" required><br>
	  <input class="btn btn-lg btn-primary btn-block" type="submit"  value="Sign In" ><br><br>
	  <p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
    </form>
  </body>
</html>
