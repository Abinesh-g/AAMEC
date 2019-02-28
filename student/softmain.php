<?php
if(isset($_POST['ten']))
{
	header("location: insert_ten.php");	
}
if(isset($_POST['aadhar']))
{
	header("location: insert_aadhar.php");	
}
if(isset($_POST['twel']))
{
	header("location: insert_twel.php");	
}
if(isset($_POST['passbook']))
{
	header("location: insert_passbook.php");	
}
if(isset($_POST['first']))
{
	header("location: insert_firstgraduate.php");	
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
<a href="reg1.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px;color: #fff" >STUDENT INFORMATION</a>
	</ul>
</nav>
<form class="form-signin text-center" style="padding-top:0px" method="post"><br><br><br><br><br><br><br>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Insert 10th softcopy" name="ten"><br>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Insert 12th softcopy" name="twel"><br>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Insert Passbook softcopy" name="passbook"><br>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Insert First Graduate softcopy" name="first"><br>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Insert Aadhar card softcopy" name="aadhar"><br>
		<br>
<p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>

</head>
</html>