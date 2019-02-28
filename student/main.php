<?php
if(isset($_POST['insert']))
{
	header("location: login1.php");	

}
if(isset($_POST['view']))
{
	header("location: reg2.php");	

}
if(isset($_POST['sortlist']))
{
	header("location: sort_main.php");	

}

if(isset($_POST['mark']))
{
	header("location: cycle.php");	

}
if(isset($_POST['sub']))
{
	header("location: sub_ins.php");	

}
if(isset($_POST['update']))
{
    header("location: reg.php");    

}
if(isset($_POST['export']))
{
    header("location: login3.php");    

}
?>
<!doctype html>
<html lang="en">
  <head>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
footer {
    position: relative;
    height: 0px;
    bottom: 110px;
    left: 0px;
    right: 0px;
	margin-bottom: 0px;
	text-size:1px;
	
}
</style>
<title>Student Information </title>
</head>

<body class="" background="bg1.png">

<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
			<button type="button" id="sidebarCollapse" class="btn btn-primary navbar-btn">
				<i class="fa fa-align-justify" style="font-size:30px;" ></i>
				<span>Menu</span>
			</button>
    <ul class="nav-item" style="padding-left:30px;">
		<img src="logo.png" alt="Logo" style="width:70px;">
	</ul>
	<center>
    <ul class="nav-item justify-content-center" >
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-normal" style="font-size:35px;text-align: center;" href="#">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</a>
    </ul></center>
    <a href="index.php" id="main" style="color:black;padding-left:30px;">Sign Out</a>
</nav>

<nav>
<form method="post" style="padding-top:100px">
<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="bg-primary" >
                <ul class="list-unstyled components">
                    <li class="bg-primary">
						<input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Insert New Student Details"  name="insert">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Student Details"  name="update">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="View Details" name="view">
                        
						<input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Insert Subject" name="sub">
						<input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Insert Mark" name="mark">
						 <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="View Sortlist"  name="sortlist">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Copy Data to Excel"  name="export">
					</li>
				</ul>
				</div>
            </nav>

</div>
<!-- <input type="submit" class="btn btn-md btn-primary btn-block" value="Insert New Student Details"  name="insert"><br>
<input type="submit" class="btn btn-md btn-primary btn-block" value="View Details" name="view"><br>
<input type="submit" class="btn btn-md btn-primary btn-block" value="Insert Mark" name="mark"><br>
<input type="submit" class="btn btn-md btn-primary btn-block" value="Insert Subject" name="sub"><br>
<input type="submit" class="btn btn-md btn-primary btn-block" value="View Sortlist"  name="sortlist"><br> -->
</form>
</nav>

<p class="h1 text-primary text-center" >AAMEC STUDENT INFORMATION</p>
</body>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
		 </script>
		 




<footer style="top:180px;">
<p class="mt-2 mb-3 text-center" >&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</footer>
</html>
