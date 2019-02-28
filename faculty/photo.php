<?php
session_start();
$dept=$_SESSION["dept"] ;
$name=$_SESSION["name"] ;
$db=$_SESSION["db"] ;

  	$con=mysqli_connect('localhost','root','');
	if($con)
	{
	//echo nl2br( "\n server connected");
	}
	else
	{
	 echo nl2br("\n server not connected");
	}
	if(mysqli_select_db($con,$db))
	{
	//echo nl2br("\n db connected ");
	}
	else
	{
	echo nl2br("\n db not connected");
	}
	
	//$reg_no=$_POST['reg_no'];

	$sql="SELECT * FROM photo";




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

<title>Faculty Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="main2.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">FACULTY INFORMATION</a>
	</ul>
</nav>

  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:0%;min-width:500px;" enctype="multipart/form-data">
  





  <h1 class="text-primary">FACULTY SOFTCOPY DETAILS</h1><br>
    <div class="row justify-content-center">
            

            <?php
          	//$reg=$_POST['reg_no'];

	 			$con=mysqli_connect("localhost","root","");
				//$depname="faculty";
				$m=mysqli_select_db($con,$db);

				$qry="SELECT * FROM photo WHERE (dept='$dept' AND name='$name')";
				$result=mysqli_query($con,$qry);
				
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					
					echo('<h1 class="text-primary">'.$row[2].'</h1><br>');
                    echo '<img height="400" width="500" src="data:image;base64,'.$row[3].' "> ';
                    echo '<br/>';
					
				}

            ?>