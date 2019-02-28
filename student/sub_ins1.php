
<?php


    $regulation=$_POST['regulation'];
    $sem=$_POST['sem'];
    $dept=$_POST['dept'];

    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $sub3=$_POST['sub3'];
    $sub4=$_POST['sub4'];
    $sub5=$_POST['sub5'];
    $sub6=$_POST['sub6'];



    
    $type=$regulation. $dept.$sem;
 	$con=mysqli_connect('localhost','root','linux$11');
    if($con)
    {
   echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
    if(mysqli_select_db($con,'subject'))
    {
   echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }

	//$sql="SELECT * FROM subject";
//	if($sql)
	{
	//	echo "sql works";
	}

//	$result=mysqli_query($con,$sql);
//	$row=mysqli_fetch_array($result);
 
echo nl2br("\n $sub1--$sub2--$sub3--$sub4--$sub5--$sub6--$type");
 
  $sql1="INSERT INTO subject(type,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$type','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6')";

if($sql1)
	echo nl2br("\n query work");
else
	echo nl2br("\n query not work");

    $result1=mysqli_query($con,$sql1);
    if($result1)
             {
                echo nl2br($reg."\n value");
                echo nl2br("\n value inserted");
                //echo "<script>alert('subjects are inserted successfully!!!...')</script>";
                //header("location:sub_ins.php"); 
            }
            else
            {
                echo($reg."\n value not instered");
		printf("error: %s\n", mysqli_error($con));
                //echo "<script>alert('subjects arenot inserted!!!...')</script>";
                //header("location:sub_ins.php"); 
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

<title>Student Information </title>

</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark justify-content-center" style="min-height:50px">
<a href="sub_ins.php" id="main" style="color:black;">&larr;Back</a>
    <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul>
    <ul class="nav-item">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-normal" style="font-size:35px" href="#">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</a>
	</ul>
</nav>
        </body>
        </html>
