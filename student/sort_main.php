<?php

if(isset($_POST['academic']))
{


header("location: sort.php");	

}

if(isset($_POST['quota']))
{

header("location: sort_quota.php");	
}
if(isset($_POST['firstgraduate']))
{


header("location: sort_first.php");	

}

if(isset($_POST['caste']))
{

header("location: sort_caste.php");	
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
<a href="main.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>
<form class="text-center" method="post" > 
<br><br><br><br><br><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Academic Sortlist" formaction="" name="academic"><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Quota Sortlist"  name="quota" formaction=""><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Firstgraduate Sortlist"name="firstgraduate" formaction=""><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Caste Sortlist" name="caste" formaction=""><br>
<p class="mt-1 mb-1 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin,Govindharaj</p>
</form>
</body>
</head>
</html>