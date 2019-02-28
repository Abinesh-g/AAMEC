<?php
session_start();
$dept=$_SESSION["dept"] ;
$name=$_SESSION["name"] ;
$db=$_SESSION["db"] ;
//$description=$_POST['description'];
$con=mysqli_connect('localhost','root','');
    if($con)
    {
  // echo nl2br( "\n server connected");
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
if(isset($_POST['submit']))
{
	//echo "inside submit";
					$image= addslashes($_FILES['image']['tmp_name']);
                    $name1= addslashes($_FILES['image']['name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
                    //saveimage($name,$image);

                    $query=( " SELECT  * FROM  photo");
					$res=mysqli_query($con,$query);
					$row=mysqli_fetch_array($res);
                    $description=$_POST['description'];
					    
        $qname="INSERT INTO photo(dept,name,description,photo) VALUES('$dept','$name','$description','$image')";
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
                        
        $qname="UPDATE photo SET photo='$image' WHERE dept='$dept' AND name='$name' AND description='$description' ";
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

<title>Faculty Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">

    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px;color: #fff" >FACULTY INFORMATION</a>
	</ul>
</nav>
<form action="" class="form-signin text-center" method="post" enctype="multipart/form-data">
<br><br><br><br>
<h3 style="padding-top:0px">SELECT TYPE:</h3><select  name="description" required>
<option value="AADHAR">AADHAR CARD</option>
<option value="PASSBOOK">PASSBOOK</option>
<option value="SSLC">SSLC MARKSHEET</option>
<option value="HSC">HSC MARKSHEET</option>
<option value="UG">UG DEGREE</option>
<option value="PG">PG DEGREE</option>
<option value="DEGREE1">DEGREE1</option>
<option value="DEGREE2">DEGREE2</option>
<option value="EXPERIENCE1">EXPERIENCE CERTIFICATE 1</option>
<option value="EXPERIENCE2">EXPERIENCE CERTIFICATE 2</option>
<option value="EXPERIENCE3">EXPERIENCE CERTIFICATE 3</option>
</select><br><br><br>
<h3 style="padding-top:0px">UPLOAD PHOTO:</h3><input type="file" name="image" class="form-control" placeholder="Enter Details" required>
<br><br>
<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Insert">
<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit1" value="update">
<p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</head>
</html>