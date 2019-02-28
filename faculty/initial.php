<?php

if(isset($_POST['submit']))
{
		$name1=$_POST['name1'];
		$name=$_POST['name'];
		if($name==$name1)
		{
		header("location: main.php");	
		
		
		
		
		$dept=$_POST['dept'];
		
		$name=$_POST['name'];
		

		$db=$dept.$name;
		$db=str_replace(".", "_", $db);
		$db=str_replace(" ", "$", $db);
		session_start();
		$_SESSION["dept"] = $dept;
		$_SESSION["name"] = $name;
		$_SESSION["db"] = $db;
		//echo($db);
		
		//echo $db;

		$con=mysqli_connect('localhost','root','');
		if($con)
		{
		//echo nl2br( "\n server connected");
		}
		else
		{
		 echo nl2br("\n server not connected");
		}
	
		$sql=("CREATE DATABASE $db ");
		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo nl2br("\n db created $db");
		}
		else
		{
			echo nl2br("\n db not created $db");
		}
		if(mysqli_select_db($con,$db))
	    {
	    echo nl2br("\n db connected ");
	    }
	    else
	    {
	    echo nl2br("\n db not connected");
	    }
		$sql1="CREATE TABLE details(dept varchar(50),name varchar(50),id varchar(50),dob varchar(50),gender varchar(50),blood_group varchar(50),email varchar(50),aadhar varchar(50),bank varchar(50),passport varchar(50),pan varchar(50),contact varchar(50),religion varchar(50),caste varchar(50),place varchar(50),travel_mode varchar(50),siblings varchar(50),status varchar(50),language varchar(50),hobbies varchar(50),f_name varchar(50),m_name varchar(50),f_occupation varchar(50),m_occupation varchar(50),income varchar(50),p_contact varchar(50),address varchar(50),s_school varchar(50),s_mark varchar(50),s_percentage varchar(50),s_board varchar(50),s_year varchar(50),h_school varchar(50),h_mark varchar(50),h_percentage varchar(50),h_board varchar(50),h_year varchar(50),image longblob)";
		$result1=mysqli_query($con,$sql1);
		if($result1)
		{
			echo nl2br("\n detail table created $db");
		}
		else
		{
			echo nl2br("\n detail table not created $db");
		}
		$sql2="CREATE TABLE degree(degree varchar(50),dept varchar(50),cgpa varchar(50),institution varchar(50),university varchar(50),year varchar(50),project varchar(100))";
		$result2=mysqli_query($con,$sql2);
		if($result2)
		{
			echo nl2br("\n degree table created $db");
		}
		else
		{
			echo nl2br("\n degree table not created $db");
		}		
		$sql3="CREATE TABLE experience(institution varchar(50),designation varchar(50),e_from varchar(50),e_to varchar(50),total varchar(50))";
		$result3=mysqli_query($con,$sql3);
		if($result3)
		{
			echo nl2br("\n experience table created $db");
		}
		else
		{
			echo nl2br("\n experience table not created $db");
		}	

		$sql4="CREATE TABLE publication(title varchar(50),author varchar(50),publisher varchar(50),p_date varchar(50),isbn varchar(50),edition varchar(50),pages varchar(50),description varchar(100))";
		$result4=mysqli_query($con,$sql4);
		if($result4)
		{
			echo nl2br("\n publication table created $db");
		}
		else
		{
			echo nl2br("\n publication table not created $db");
		}	
		$sql5="CREATE TABLE award(title varchar(50),description varchar(100),a_date varchar(50),place varchar(50))";
		$result5=mysqli_query($con,$sql5);
		if($result5)
		{
			echo nl2br("\n award table created $db");
		}
		else
		{
			echo nl2br("\n award table not created $db");
		}
		$sql6="CREATE TABLE guest_lucture(title varchar(50),description varchar(100),place varchar(50),g_date varchar(50))";
		$result6=mysqli_query($con,$sql6);
		if($result6)
		{
			echo nl2br("\n guest_lucture table created $db");
		}
		else
		{
			echo nl2br("\n guest_lucture table not created $db");
		}
		$sql7="CREATE TABLE course(name varchar(50),description varchar(100),type varchar(50),start varchar(50),end varchar(50))";
		$result7=mysqli_query($con,$sql7);
		if($result7)
		{
			echo nl2br("\n course table created $db");
		}
		else
		{
			echo nl2br("\n course table not created $db");
		}
		$sql8="CREATE TABLE photo(dept varchar(50),name varchar(50),description varchar(50),photo longblob)";
		$result8=mysqli_query($con,$sql8);
		if($result8)
		{
			echo nl2br("\n photo table created $db");
		}
		else
		{
			echo nl2br("\n photo table not created $db");
		}
}
		else
		{
			echo "<script>alert('Re-Enter The Correct Name')</script>"; 
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
</option> <option value="cildept_">CIVIL
</option> <option value="mhdept_">MECH
</option> <option value="mcdept_">MCA
</option><option value="chdept_">CHEMICAL
</option>  
</select><br><br><br><br>ENTER STAFF NAME:
        <input type="text" class="form-control" name="name" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)"  placeholder="Enter name"><br>
        RE-ENTER STAFF NAME:
        <input type="text" class="form-control" name="name1"  onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)" placeholder="Enter Reenter the name"><br>
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit" ><br><br><br><br>
    <p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>

</body>
</html>
