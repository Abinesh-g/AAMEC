
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
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="detselect.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>
<center>
<?php
session_start();

$regno=$_SESSION["regno"];
//echo $regno;
if($_SESSION['regno'])
{
//	echo "sess work";
}

if(isset($_POST['submit']))
{
//	echo "inside submit";
	$sem=$_POST['sem'];
	$test=$_POST['test'];
	$con=mysqli_connect('localhost','root','linux$11');
	if($con)
	{
//	echo nl2br( "\n server connected");
	}
	else
	{
	 echo nl2br("\n server not connected");
	}
	if(mysqli_select_db($con,'marks'))
	{
//	echo nl2br("\n db connected ");
	}
	else
	{
	echo nl2br("\n db1 not connected");
	}

	
//	$reg_no=$_POST['reg_no'];

//echo $regno ;
//echo $sem;
//echo $test;
$sql="SELECT * FROM marks WHERE ((register_number='$regno') AND (semester='$sem') AND (test_name='$test')) ";

if ($result=mysqli_query($con,$sql))
  {
  //  echo"inside if";
  
   $copy=array();
//echo "before while";
  while ($row=mysqli_fetch_row($result))
    {

 	 for($i=0;$i<count($row);$i++)
	    { $copy[$i]=$row[$i];
		//	echo nl2br("\n $row[$i]");		
    		}
  }
//echo count($copy);

  mysqli_free_result($result);
}
}
?>
<?php

if(isset($_POST['submit1']))
{
echo n2blr("inside if 1");
	$i=13;
    $j=4;


  $mark1=$copy[$j];$j++;
  $mark2=$copy[$j];$j++;
  $mark3=$copy[$j];$j++;
  $mark4=$copy[$j];$j++;
  $mark5=$copy[$j];$j++;
  $mark6=$copy[$j];$j++;
  $sub1=$copy[$i];$i++;
  $sub2=$copy[$i];$i++;
  $sub3=$copy[$i];$i++;
  $sub4=$copy[$i];$i++;
  $sub5=$copy[$i];$i++;
  $sub6=$copy[$i];$i++;


if($mark1>=50)
{
	$res1="PASS";
}
else
{
	$res1="FAIL";
}
if($mark2>=50)
{
	$res2="PASS";
}
else
{
	$res2="FAIL";
}if($mark3>=50)
{
	$res3="PASS";
}
else
{
	$res3="FAIL";
}if($mark4>=50)
{
	$res4="PASS";
}
else
{
	$res4="FAIL";
}if($mark5>=50)
{
	$res5="PASS";
}
else
{
	$res5="FAIL";
}if($mark6>=50)
{
	$res6="PASS";
}
else
{
	$res6="FAIL";
}




	$con1=mysqli_connect('localhost','root','linux$11');
	
if(mysqli_select_db($con1,'details'))
	{
	echo nl2br("\n db2 connected ");
	}
	else
	{
	echo nl2br("\n db2 not connected");
	}


$sql1="SELECT * FROM details WHERE register_number='$regno'";

if ($result1=mysqli_query($con1,$sql1))
  {
    echo"inside 2 if";
  
   $copy1=array();
  while ($row1=mysqli_fetch_row($result1))
    {
  for($i1=0;$i1<count($row1);$i1++)
  $copy1[$i1]=$row1[$i1];
    }
  
//echo count($copy);

  mysqli_free_result($result1);
 }


//$i=1;

$register_number=$copy1[1];
$mobileNumber=$copy1[22];
//$test=$_POST['test'];



/*
echo("MobileNumber:");echo($mobileNumber);echo nl2br("\n");
echo ("Register_number:");echo($register_number);echo nl2br("\n");
echo ("Test:");echo($test);echo nl2br("\n");
echo($sub1."=");echo($mark1);echo nl2br("\n");
echo($sub2."=");echo($mark2);echo nl2br("\n");
echo($sub3."=");echo($mark3);echo nl2br("\n");
echo($sub4."=");echo($mark4);echo nl2br("\n");
echo($sub5."=");echo($mark5);echo nl2br("\n");
echo($sub6."=");echo($mark6);echo nl2br("\n");
*/
$Message=("RegisterNumber:".$register_number."  "."Test:".$test."  ".$sub1."=".$mark1."(".$res1.")"."  ".$sub2."=".$mark2."(".$res2.")"."  ".$sub3."=".$mark3."(".$res3.")"."  ".$sub4."=".$mark4."(".$res4.")"."  ".$sub5."=".$mark5."(".$res5.")"."  ".$sub6."=".$mark6."(".$res6.")");
echo($Message);





$authKey = "170031AWWITcGB599302ff";

//Multiple mobiles numbers separated by comma
//$mobileNumber = $_POST['no'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AAMECA";

//Your message to send, Add URL encoding here.
/* @var $message type */
/* @var $message1 type */
/* @var $_POST type */
//$Message=$_POST['mes'];
$message = urlencode("$Message");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="https://control.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

//echo $output;

echo nl2br($mobileNumber."\n message send successful...");

}








?>

 <?php 


 echo'<br><br><br><br><br><div class="row "><div class="col-7 font-weight-bold text-left">'; echo "SUBJECT";
 echo'</div><div class="col-5 font-weight-bold text-right">';echo "MARK"; ?><?php echo nl2br("\n");echo'</div>'; echo'</div></div><br><br><br>';


 echo'<div class="row"><div class="col-7 font-weight-bold text-left">';
 echo($copy[4]);
 echo'</div><div class="col-5 font-weight-bold text-right">';
 echo($copy[10]); echo nl2br("\n"); echo'</div></div><br>';

echo'<div class="row"><div class="col-7 font-weight-bold text-left">';
echo($copy[5]);echo'</div><div class="col-5 font-weight-bold text-right">';
echo($copy[11]); echo nl2br("\n"); echo'</div></div><br>';

 echo'<div class="row"><div class="col-7 font-weight-bold text-left">';
 echo($copy[6]);echo'</div><div class="col-5 font-weight-bold text-right">';
 echo($copy[12]); echo nl2br("\n"); echo'</div></div><br>';

echo'<div class="row"><div class="col-7 font-weight-bold text-left">';
echo($copy[7]);echo'</div><div class="col-5 font-weight-bold text-right">';
echo($copy[13]); echo nl2br("\n"); echo'</div></div><br>';
					 
echo'<div class="row"><div class="col-7 font-weight-bold text-left">';
echo($copy[8]);echo'</div><div class="col-5 font-weight-bold text-right">';
echo($copy[14]); echo nl2br("\n"); echo'</div></div><br>';

echo'<div class="row"><div class="col-7 font-weight-bold text-left">';
echo($copy[9]);echo'</div><div class="col-5 font-weight-bold text-right">';
echo($copy[15]); echo nl2br("\n"); echo'</div></div><br>';


?>

 


                   


</div>
</div>
</center>

</body>

</html>


