<?php
session_start();

if(isset($_POST['submit']))
{
		$regno=$_POST['reg_no'];
		
		$_SESSION["regno"] = $regno;
		//if($_SESSION["regno"])
		header("location: softmain.php");	
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
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:0px">
<a href="select.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px;color: #fff" >STUDENT INFORMATION</a>
	</ul>
</nav>

<form class="form-signin" style="padding-top:10px" method="post"><br><br><br><br><br><br><br>
      <h1 class="h2 mb-0 font-weight-normal" style="padding-bottom:20px">REGISTER NUMBER</h1>
      <label for="regno"  class="sr-only">Register Number</label>
        <input type="number" class="form-control" name="reg_no" placeholder="Enter reg. no."><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit"><br>
    <p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>
