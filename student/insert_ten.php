<?php
session_start();

$regno=$_SESSION["regno"];

if($_SESSION['regno'])
{
	//echo "sess work";
}
//$regno="820415205001";
$con=mysqli_connect('localhost','root','linux$11');
    if($con)
    {
  // echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
    if(mysqli_select_db($con,'photos'))
    {
    //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }
if(isset($_POST['submit']))
{
	//echo "inside submit";
					$image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
                    //saveimage($name,$image);

                      $query=( " SELECT  * FROM  ten ");
					    $res=mysqli_query($con,$query);
					    $row=mysqli_fetch_array($res);
					    
        $qname="INSERT INTO ten(register_number,ten) VALUES('$regno','$image')";
            $equ=mysqli_query($con,$qname);
		if($equ)
		{
			echo "inserted successfully";
		}           

}
if(isset($_POST['submit1']))
{
    //echo "inside submit";
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
                    //saveimage($name,$image);

                      $query=( " SELECT  * FROM  ten ");
                        $res=mysqli_query($con,$query);
                        $row=mysqli_fetch_array($res);
                        
        $qname="UPDATE ten SET ten='$image' WHERE register_number='$regno' ";
            $equ=mysqli_query($con,$qname);
        if($equ)
        {
            echo "inserted successfully";
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
<a href="softmain.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px;color: #fff" >STUDENT INFORMATION</a>
	</ul>
</nav>
<form action="" class="form-signin text-center" method="post" enctype="multipart/form-data"><br><br><br><br><br><br><br>
<h3 style="padding-top:0px">UPLOAD PHOTO:</h3><input type="file" name="image" class="form-control" placeholder="Enter Details" required>
<br><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Insert">
<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit1" value="update">
<p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</head>
</html>