<?php
if(isset($_POST['softcopy']))
{
	header("location: photo.php");	

}
if(isset($_POST['view']))
{
	header("location: viewdet.php");	

}
if(isset($_POST['degree']))
{
	header("location: insert_degree.php");	

}
if(isset($_POST['award']))
{
	header("location: insert_award.php");	

}
if(isset($_POST['course']))
{
	header("location: insert_course.php");	

}
if(isset($_POST['experience']))
{
	header("location: insert_experience.php");	

}
if(isset($_POST['guest']))
{
	header("location: insert_guest_lucture.php");	

}
if(isset($_POST['photo']))
{
	header("location: insert_photo.php");	

}
if(isset($_POST['publication']))
{
	header("location: insert_publication.php");	

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
<title>Faculty Information </title>
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
						<input type="submit" class="btn btn-md btn-primary btn-block text-left" value="View Details"  name="view">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="View Softcopy"  name="softcopy">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Degree Details"  name="degree">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Award Details"  name="award">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Course Details"  name="course">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Experience Details"  name="experience">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Guestlecture Details"  name="guest">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Photo Details"  name="photo">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="Update Publication Details"  name="publication">



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

<p class="h1 text-primary text-center" >AAMEC FACULTY INFORMATION</p>
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