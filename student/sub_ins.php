<?php


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
<a href="main.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>

<form class="form-signin text-cente" action="sub_ins1.php" style="padding-top:20px" method="post">
<div class="row">
	<div class="col-8" style="width:150px;">
		SELECT REGULATION:
	</div>
	<div class="col-md-4" >
		<select  class="form-control" style="font-size:11px;" name="regulation" required>
			<option value="r13">2013</option>
			<option value="r17">2017</option>
		</select>
	</div>
</div>
<br>
<div class="row" >
	<div class="col-8" style="width:150px;">
	SELECT DEPARTMENT:
	</div>
	<div class="col-md-4" >
	<select class="form-control" style="font-size:11px;" name="dept" required>
			<option value="it">IT</option>
			<option value="cse">CSE</option>
			<option value="ece">ECE</option>
			<option value="eee">EEE</option>
			<option value="mech">MECH</option>
			<option value="chem">CHEM</option>
			<option value="mca">MCA</option>
	</select>
	</div>
</div>
<br>
<div class="row">
	<div class="col-8" style="width:150px;">
	SELECT SEMESTER:
	</div>
	<div class="col-md-4">
	<select class="form-control" style="font-size:11px;" name="sem" required>
			<option value="sem1">1</option>
			<option value="sem2">2</option>
			<option value="sem3">3</option>
			<option value="sem4">4</option>
			<option value="sem5">5</option>
			<option value="sem6">6</option>
			<option value="sem7">7</option>
			<option value="sem8">8</option>	
	</select>
	</div>
</div>
<br><br>

<br>
<center>Enter Subject Name</center><br>

<div class="row">
	<div class="col-2">
        1.
    </div>
    <div class="col-10">
        <input type="text" class="form-control" name="sub1"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) ||(event.charCode > 47 && 
    event.charCode < 58)|| (event.charCode > 31 && event.charCode < 33) || (event.charCode > 44 && event.charCode < 46) " placeholder="enter subject name" >
    </div>
</div>
<br>
<div class="row">
	<div class="col-2">
        2.
    </div>
    <div class="col-10">
        <input type="text" class="form-control" name="sub2"    onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) ||(event.charCode > 47 && 
    event.charCode < 58) || (event.charCode > 31 && event.charCode < 33) || (event.charCode > 44 && event.charCode < 46) " placeholder="enter subject name" >
    </div>
</div>
<br>
<div class="row">
	<div class="col-2">
        3.
    </div>
    <div class="col-10">
        <input type="text" class="form-control" name="sub3"   onkeypress="return (event.charCode > 64 && 
    event.charCode < 91)||(event.charCode > 47 && 
    event.charCode < 58) || (event.charCode > 96 && event.charCode < 123) || (event.charCode > 31 && event.charCode < 33) || (event.charCode > 44 && event.charCode < 46) " placeholder="enter subject name" >
    </div>
</div>
<br>
<div class="row">
	<div class="col-2">
        4.
    </div>
    <div class="col-10">
        <input type="text" class="form-control" name="sub4"   onkeypress="return (event.charCode > 64 && 
    event.charCode < 91)||(event.charCode > 47 && 
    event.charCode < 58) || (event.charCode > 96 && event.charCode < 123) || (event.charCode > 31 && event.charCode < 33) || (event.charCode > 44 && event.charCode < 46) " placeholder="enter subject name" >
    </div>
</div>
<br>
<div class="row">
	<div class="col-2">
        5.
    </div>
    <div class="col-10">
        <input type="text" class="form-control" name="sub5"   onkeypress="return (event.charCode > 64 && 
    event.charCode < 91)||(event.charCode > 47 && 
    event.charCode < 58) || (event.charCode > 96 && event.charCode < 123) || (event.charCode > 31 && event.charCode < 33) || (event.charCode > 44 && event.charCode < 46) " placeholder="enter subject name" >
    </div>
</div>
<br>
<div class="row">
	<div class="col-2">
        6.
    </div>
    <div class="col-10">
        <input type="text" class="form-control" name="sub6"   onkeypress="return (event.charCode > 64 && 
    event.charCode < 91)||(event.charCode > 47 && 
    event.charCode < 58) || (event.charCode > 96 && event.charCode < 123) || (event.charCode > 31 && event.charCode < 33) || (event.charCode > 44 && event.charCode < 46) " placeholder="enter subject name"  >
    </div>
</div>
<br><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="submit" name="insert" >
<br><br>
<p class="mt-2 mb-3 text-center" >&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</form>
</body>
</head>
</html>