<?php

session_start();

$regno=$_SESSION["regno"];

if($_SESSION['regno'])
{
	//echo "sess work";
}

if($regno)
{
	//echo "var work";
}
//echo $regno;
  	$con=mysqli_connect('localhost','root','linux$11');
	if($con)
	{
	//echo nl2br( "\n server connected");
	}
	else
	{
	 echo nl2br("\n server not connected");
	}
	if(mysqli_select_db($con,'details'))
	{
	//echo nl2br("\n db connected ");
	}
	else
	{
	echo nl2br("\n db not connected");
	}
	
	//$reg_no=$_POST['reg_no'];

$sql="SELECT * FROM details WHERE register_number='$regno' ";

if ($result=mysqli_query($con,$sql))
  {
	 $i=0;
	 $copy=array();
  while ($row=mysqli_fetch_row($result))
    {
	for($i=0;$i<count($row);$i++)
	$copy[$i]=$row[$i];
    }
	
  $i=0;
  mysqli_free_result($result);
}

 






//session_start();

//$regno=$_SESSION["regno"];
//echo $regno;

if(isset($_POST['mark']))
{

$_SESSION['regno'] = $regno;
if($_SESSION['regno'])
//echo "works";
header("location: cycle_view.php");	

}
if(isset($_POST['viewdet']))
{

$_SESSION['regno'] = $regno;
if($_SESSION['regno'])
//echo "works";
header("location: viewdet.php");	

}

if(isset($_POST['message']))
{

$_SESSION['regno'] = $regno;
if($_SESSION['regno'])
//echo "works";
header("location: msg_db.php");	
}
if(isset($_POST['soft']))
{

$_SESSION['regno'] = $regno;
if($_SESSION['regno'])
//echo "works";
header("location: viewsoft.php");	
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
<a href="reg2.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>
<form class="form-signin text-center" method="post" style="padding-top:0px"> <br><br><br><br>
<div class="row">
	<div class="col-4">
       NAME:
	</div>
	<div class="col-7 font-weight-bold" >   
		<?php echo $copy[$i];$i++; ?>
	</div>
</div><br>
<div class="row">
	<div class="col-4">
		REGISTER NUMBER:
	</div>
	<div class="col-7 font-weight-bold">   
		<?php echo $copy[$i];$i++; ?>
	</div>
</div>
<br><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="View Details" formaction="" name="viewdet"><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="View Marks"  name="mark" formaction=""><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="View Softcopy"name="soft" formaction=""><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Send Message" name="message" formaction=""><br><br>
<p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</body>
</html>
