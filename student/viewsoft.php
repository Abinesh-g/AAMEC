<?php
session_start();

			$regno=$_SESSION["regno"];

			if($_SESSION['regno'])
			{
				//echo "sess work";
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
<a href="detselect.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>

  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:3%;min-width:0px;" enctype="multipart/form-data">
 		 <h2 class="text-primary">TENTH STANDARD MARKSHEET<h2><br>
		  <div class=" row  justify-content-center">
		  
            <?php
          	//$reg=$_POST['reg_no'];

	 			$con=mysqli_connect('localhost','root','linux$11');
				$depname="photos";
				mysqli_select_db($con,$depname);
				$qry="SELECT * FROM ten WHERE register_number='$regno'";
				if($qry)
				{
				//	echo "query works";
				}
				$result=mysqli_query($con,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{//echo "inside while";
					if($row[0]==$regno)
					{
						//echo "";
                    echo '<img height="800" width="600" src="data:image;base64,'.$row[1].' ">';


					
					}
				}

            ?>
			</div><br><br><br>

<h2 class="text-primary">TWELTH STANDARD MARKSHEET</h2><br>
<div class=" row justify-content-center">
            <?php
          	//$reg=$_POST['reg_no'];

          	$con=mysqli_connect('localhost','root','linux$11');
				$depname="photos";
				mysqli_select_db($con,$depname);
				$qry="SELECT * FROM twel WHERE register_number='$regno'";
				$result=mysqli_query($con,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					if($row[0]==$regno)
					{
							//echo "TWELTH STANDARD MARKSHEET";
                    echo '<img height="800" width="600" src="data:image;base64,'.$row[1].' ">';


					
					}
				}

            ?>
</div><br><br><br>
<h2 class="text-primary">PASSBOOK</h2><br>
<div class="row justify-content-center">
            <?php
          	//$reg=$_POST['reg_no'];

          	$con=mysqli_connect('localhost','root','linux$11');
				$depname="photos";
				mysqli_select_db($con,$depname);
				$qry="SELECT * FROM passbook WHERE register_number='$regno'";
				$result=mysqli_query($con,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					if($row[0]==$regno)
					{
							
                    echo '<img height="500" width="600" src="data:image;base64,'.$row[1].' ">';


					
					}
				}

            ?>
</div><br><br><br>
<h2 class="text-primary">FIRSTGRADUATE CERTIFICATE</h2><br>
   <div class="row justify-content-center">
            <?php
          	//$reg=$_POST['reg_no'];

          	$con=mysqli_connect('localhost','root','linux$11');
				$depname="photos";
				mysqli_select_db($con,$depname);
				$qry="SELECT * FROM first_graduate WHERE register_number='$regno'";
				$result=mysqli_query($con,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					if($row[0]==$regno)
					{
							//echo "TWELTH STANDARD MARKSHEET";
                    echo '<img height="800" width="600" src="data:image;base64,'.$row[1].' ">';


					
					}
				}

            ?>
</div><br><br>

<h2 class="text-primary">AADHAR CARD</h2><br>
<div class="row justify-content-center">
            <?php
          	//$reg=$_POST['reg_no'];

          	$con=mysqli_connect('localhost','root','linux$11');
				$depname="photos";
				mysqli_select_db($con,$depname);
				$qry="SELECT * FROM aadhar WHERE register_number='$regno'";
				$result=mysqli_query($con,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					if($row[0]==$regno)
					{
							//echo "TWELTH STANDARD MARKSHEET";
                    echo '<img height="200" width="600" src="data:image;base64,'.$row[1].' ">';


					
					}
				}

            ?>
</div>
<br><br>
<center>
<button onclick="myFunction()">print</button>
</center>
<script>
		function myFunction(){
		window.print();}
		</script>
<p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
   </form>
   
   </body>
   </html>