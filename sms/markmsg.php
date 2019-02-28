<?php

session_start();

$type=$_SESSION['type'];
$sem=$_SESSION['sem'];

 $con=mysqli_connect('localhost','root','linux$11');
    if($con)
    {
   //echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
	$conn= mysqli_select_db($con,'subject');
  $query1=( "SELECT * FROM subject WHERE type='$type' ");
    //echo "inside ifff";
  if($res1=mysqli_query($con,$query1))
   {
      //echo "inside if";
  $row1=mysqli_fetch_row($res1);
    //while ($row1)
  $i=0;
  $copy=array();
  //$sub=array();
  for($i=0;$i<count($row1);$i++)
  $copy[$i]=$row1[$i];
  //$sub[$i]=$ro[$i];
    //}
  }
  $i=1;




if(isset($_POST['submit']))

{

  $mark1=$_POST['m1'];
  $mark2=$_POST['m2'];
  $mark3=$_POST['m3'];
  $mark4=$_POST['m4'];
  $mark5=$_POST['m5'];
  $mark6=$_POST['m6'];
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


$i=1;
$register_number=$_POST['register_number'];
$mobileNumber=$_POST['number'];
$test=$_POST['test'];
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
//echo($Message);







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





  if(mysqli_select_db($con,'marks'))
    {
   //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }

   $query1=( " SELECT  * FROM  marks ");
    $res1=mysqli_query($con,$query1);
    $row1=mysqli_fetch_array($res1);
    
        $qname1="INSERT INTO marks(type,register_number,semester,test_name,sub1,sub2,sub3,sub4,sub5,sub6,mark1,mark2,mark3,mark4,mark5,mark6) VALUES('$type','$register_number','$sem','$test','$copy[1]','$copy[2]','$copy[3]','$copy[4]','$copy[5]','$copy[6]','$mark1','$mark2','$mark3','$mark4','$mark5','$mark6')";
            $equ1=mysqli_query($con,$qname1);
            if($equ1)
            {
              echo(" value inserted ");
            }



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

<title>Student Information </title>
</head> 

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="cycle1.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>
<form class="text-center" style="padding-top:100px" method="post">

<div class="row">
              <div class="col-lg-6 mb-3">
                <label for="newregno">REGISTER NUMBER:</label>
                <input type="text" class="form-control" name="register_number" placeholder="Enter Details" required>
              </div>
              <div class="col-lg-6 mb-3">
                <label for="testtype">TEST TYPE:</label>
                <select name="test" class="form-control" required>
                   <option value="INTERNAL ASSEMENT-1">INTERNAL ASSEMENT-1</option>
                   <option value="INTERNAL ASSEMENT-2">INTERNAL ASSEMENT-2</option>
                   <option value="INTERNAL ASSEMENT-3">INTERNAL ASSEMENT-3</option>
                   <option value="SEMESTER">SEMESTER EXAM</option>
                </select></div>
</div>
<br>
<div class="row">
              <div class="col-lg-12 mb-3">
                <label for="testtype">PARENT CONTACT NUMBER:</label>
                <input type="text" name="number" class="form-control" required>
                </div>
 </div>
<br><br>
<div class="row">
             <div class="col-lg-9 text-left">
               <?php $sub1=$copy[$i];echo($sub1); $i++; ?>:
             </div>
             <div class="col-lg-3">
                <input type="text" class="form-control" name="m1" placeholder="Mark" required><br>
             </div>
</div>
<div class="row">
            <div class="col-lg-9 text-left">
               <?php $sub2= $copy[$i];echo($sub2);$i++; ?> :
             </div>
             <div class="col-3 ">
                <input type="text" class="form-control" name="m2" placeholder="Mark" required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-9 text-left"> <?php $sub3=$copy[$i]; echo($sub3);$i++; ?> :
             </div>
             <div class="col-3">
                <input type="text" class="form-control" name="m3" placeholder="Mark" required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-9 text-left"><?php $sub4= $copy[$i];echo($sub4);$i++; ?> :
             </div>
             <div class="col-3">
                <input type="text" class="form-control" name="m4" placeholder="Mark" required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-9 text-left">  <?php $sub5= $copy[$i];echo($sub5);$i++; ?> :
             </div>
             <div class="col-3">
                <input type="text" class="form-control" name="m5" placeholder="Mark" required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-9 text-left"><?php $sub6=$copy[$i];echo($sub6);$i++; ?> :
             </div>
             <div class="col-3">
                <input type="text" class="form-control" name="m6" placeholder="Mark" required><br>
             </div>
</div>
<br><br>
<br><br>
<div class="row">
             <div class="col-12 text-left">
                  <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="SEND MESSAGE">
             </div>
</div>
<p class="mt-2 mb-3 text-center" >&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</head>
</html>	

