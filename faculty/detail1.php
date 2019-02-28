<?php

session_start();
$dept=$_SESSION["dept"];
 
		//echo($db);

$Conn=mysqli_connect('localhost','root','');

$sql1= "SHOW DATABASES";
$result1 = mysqli_query($Conn,$sql1);

//echo nl2br("showing all databases");
        $dbarr=array();$finalarr=array();
        $i=0;
        echo nl2br("\n");
        while($row = mysqli_fetch_row($result1))
        {   
        	//echo nl2br("\n $row[0]");
            $dbarr[$i]=$row[0];
            $i++;
        }
	//echo "<script>alert('$dept')</script>";	

for($i=0;$i<count($dbarr);$i++)
{
    $depname= substr($dbarr[$i],0,7);
    if(!(strcmp($dept,$depname)) )
    {
        //echo nl2br("\n $dbarr[$i]"); //displaying staffname from selected department
        $staffname= substr($dbarr[$i],7); //seperating staffname only
      	//echo nl2br("\n $staffname");
            $staffname=str_replace("$"," ",$staffname);
            $staffname=str_replace("_",".",$staffname);
            $staffname=strtoupper($staffname);
            $finalarr[$i]=$staffname;
           //echo nl2br("\n final: $staffname");
    }
}

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$db=$dept.$name;

	
	$db=$dept.$name;
	$db=str_replace(".", "_", $db);
	$db=str_replace(" ", "$", $db);
	$_SESSION["name"]=$name;
	$_SESSION["db"]=$db;
	echo($db);
	header("location: main2.php");
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
<a href="detail.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">FACULTY INFORMATION</a>
	</ul>
</nav>
<form class="form-signin text-center" style="padding-top:0px" method="post"><br><br><br><br><br><br><br><br>
SELECT STAFF NAME:
<select name= "name">
<?php 
	foreach ($finalarr as $item) {
		?>
		<option value="<?php echo $item; ?>"> <?php echo $item ?> </option>
		<?php
	}
	?>
</select>
<br>
<br>
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit" ><br><br><br><br>
    <p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>
