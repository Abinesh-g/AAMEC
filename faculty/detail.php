<?php
if(isset($_POST['submit']))
{
session_start();
		$dept=$_POST['dept'];
		
		//$name=$_POST['name'];
		

		$db=$dept.$name;
		$db=str_replace(".", "_", $db);
		$db=str_replace(" ", "$", $db);

		$_SESSION["dept"]=$dept;
		$_SESSION["name"]=$name;
		$_SESSION["db"] = $db;
		//echo($db);
		//echo $db;

		header("location: detail1.php");	
}

?>

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

<title>faculty Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="main1.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">FACULTY INFORMATION</a>
	</ul>
</nav>
<form class="form-signin text-center" style="padding-top:0px" method="post"><br><br><br><br><br><br><br><br>
Select dept: <select  name="dept" required>
<option value="itdept_">IT
</option><option value="csdept_">CSE
</option> <option value="ecdept_">ECE
</option> <option value="eedept_">EEE
</option> <option value="cvdept_">CIVIL
</option> <option value="medept_">MECH
</option> <option value="mcdept_">MCA
</option><option value="chdept_">CHEMICAL
</option>  
</select><br><br><br>
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit" ><br><br><br><br>
    <p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>

</body>
</html>
