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
	//echo($copy);
    }
	
  $i=0;
  mysqli_free_result($result);
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

<body class="" background="bg1.png"><br>
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="detselect.php" id="main" style="color:black;">&larr;Back</a><br><br>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav><form method="post" class="form-signin text-center justify-content-center" style="padding-top:1%;min-width:400px;" enctype="multipart/form-data">
    <div class="justify-content-center">
            

            <?php
          	//$reg=$_POST['reg_no'];
	 			$con=mysqli_connect("localhost","root","linux$11");
				$depname="details";
				mysqli_select_db($con,$depname);
				$qry="SELECT * FROM details";
				$result=mysqli_query($con,$qry);			
	//$count=0;		
			
				while($row = mysqli_fetch_array($result))
				{
					if($row[1]==$regno)
					{
                    echo '<img height="250" width="230" src="data:image;base64,'.$row[35].' ">';
					}

				}

            ?>
    <div>
                <br><br><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        REGISTER NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DOB: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        GENDER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BLOOD GROUP: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         E-MAIL ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        AADHAR CARD NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                      BANK ACCOUNT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        POSTAL ACCOUNT NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        RELIGION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CASTE: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        PLACE OF ARRIVAL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        TRAVEL MODE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        NUMBER OF SIBLINGS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
<br>
<br>
<br>
<h1 class="text-primary">PARENT DETAILS</h1>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ANNUAL INCOME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PARENT E-MAIL ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>

<br>
<h1 class="text-primary">ACADEMIC DETAILS</h1>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL STUDIED: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH MARK: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH MARK:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CUT OF MARK:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DATE OF ADMISSION:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FIRST GRADUATE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        QUOTA:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        SCHOLARSHIP:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CGPA:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i+1]; ?> 
                    </div>
                </div><br><br>
                <br>
<center>
<button onclick="myFunction()">print</button>
</center>
<script>
        function myFunction(){
        window.print();}
        </script><br>
                <p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>
