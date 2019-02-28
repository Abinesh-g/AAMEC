<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
if(isset($_POST['student']))
{

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

//$sql="SELECT scontact FROM details WHERE register_number='$regno' ";

//$result=mysqli_query($con,$sql);
  
    
 $sql="SELECT * FROM details WHERE register_number='$regno' ";

if ($result=mysqli_query($con,$sql))
  {
     $i=8;
     $mobileNumber=array();
  while ($row=mysqli_fetch_row($result))
    {
    for($i=8;$i<count($row);$i++)
    $mobileNumber[$i]=$row[$i];
    }
    
  $i=8;
  mysqli_free_result($result);
}


//echo $mobileNumber[$i];
//Your authentication key
$authKey = "170031AWWITcGB599302ff";

//Multiple mobiles numbers separated by comma
//$mobileNumber = $_POST['no'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AAMECA";

//Your message to send, Add URL encoding here.
/* @var $message type */
/* @var $message1 type */
/* @var $_POST type */
$Message=$_POST['mes'];
$message = urlencode("$Message");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' =>$mobileNumber[$i],
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
if($postData)
{
 //   echo "data found";
}
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

echo nl2br("\n". $mobileNumber[$i]."\n message send successful...");
}
if(isset($_POST['parent']))
{

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

//$sql="SELECT scontact FROM details WHERE register_number='$regno' ";

//$result=mysqli_query($con,$sql);
  
    
 $sql="SELECT * FROM details WHERE register_number='$regno' ";

if ($result=mysqli_query($con,$sql))
  {
     $i=22;
     $mobileNumber=array();
  while ($row=mysqli_fetch_row($result))
    {
    for($i=22;$i<count($row);$i++)
    $mobileNumber[$i]=$row[$i];
    }
    
  $i=22;
  mysqli_free_result($result);
}


//echo $mobileNumber[$i];
//Your authentication key
$authKey = "170031AWWITcGB599302ff";

//Multiple mobiles numbers separated by comma
//$mobileNumber = $_POST['no'];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AAMECA";

//Your message to send, Add URL encoding here.
/* @var $message type */
/* @var $message1 type */
/* @var $_POST type */
$Message=$_POST['mes'];
$message = urlencode("$Message");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' =>$mobileNumber[$i],
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
if($postData)
{
  //  echo "data found";
}
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

echo nl2br("\n". $mobileNumber[$i]."\n message send successful...");
}
?>
        
    </body>
</html>

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
   
    <form action="" class="form-signin justify-content-center text-center" method="POST">
    <br><br><br><br><br><br>
        <label for="message" style="font-size:25px;">Message:</label>
        <input type="text" class="form-control" name="mes"/>
        <br>
        <br>
<br>
<div class="row">
    <div class="col-6">
        <input type="Submit" class="btn btn-lg btn-primary btn-block" value="To student" name="student" />
    </div>
    <div class="col-6">
        <input type="Submit" class="btn btn-lg btn-primary btn-block" value="To Parent" name="parent" />
    </div>
</div>
<p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>