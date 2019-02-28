<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php
	

	$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'details');
	if($db)
	{
	//	echo "db connected";

	}
	else
	{
		echo "db not connected";
	}
	$reg1=$_POST['reg1'];
	$reg2=$_POST['reg2'];

	$query=( " SELECT  * FROM  details");
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($res))
	{
		if(($row['register_number']>=$reg1) and ($row['register_number']<=$reg2))
		{




//echo $regno;
    $con=mysqli_connect('localhost','root','');
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
  
    
 $sql="SELECT * FROM details WHERE register_number='$row['register_number']'' ";

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
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Details</title>
<link rel="stylesheet" href="./Adminsample_files/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    margin:0;
    padding:0;
    background:url(g4.jpg);
    background-size:cover;
    background-position:center;
    font-family:sans-serif;
}


.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 17px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.foot {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow:row wrap-reverse;
    text-align: center;
}

.foot > * {
    padding: 5px;
    position:absolute;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}
header {
    background:black /*#3d3d3d*/;
    position: absolute;
    top:2;
    left:0;
    right:0;
    color:rgb(255, 255, 255);
    z-index: 1;
    }

footer {
    background:#4b4b4b;
    color:white;
    left:0;
    right:0;
    top:93%;

    height:1.8%;
    }
.middle{
    top:40%;
    min-height: 50%;
    position: absolute;
    width: 100%;
}
.nav {
    background:green /*rgb(255, 220, 180)*/;
}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}
#main {
    transition: margin-left .5s;
    padding: 16px;
    background: black /*#3d3d3d*/;
    color: white;
    position:absolute;
    top:15%;
    left:0;
    right:0;
    font-size:20px;
    cursor:pointer;
    font-family:"Century Gothic";
    font-weight:normal;
    z-index:2;
}

#rg:hover{
    color: white, #18dcff;
}

#close:hover{
    color:#795548;
}

#main a:hover{
    color: lightgreen;
}

#signout{
    color:white;
    float:right;
}
#signout:hover{
    color:skyblue;
}

.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: #67e6dc;
    color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #4d4d4d;
    padding-left: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;position:absolute;}
}
</style>
    <body>
    <div class="flex-container">
<header style="color:white;font-size:20px;font-family:Agency Fb;">
  <h2>SEND MESSAGE</h2>
</header>
</div>

<nav id="main">
  <a href="main.php" id="main">&larr;Back</a>
</nav>
        
<div class="middle">
        <br>
        <br><center>    
        <form action=""  method="POST">

        Starting reg.no:<input type="text" name="reg1" required> Ending reg.no:<input type="text" name="reg2" required>
    	<br><br><br>
        <label for="message" style="font-size:25px;">Message:&nbsp;</label>

        <input type="text" name="mes" style="width:20%";/>
        <br>
        <br>

        
<br><br>
<input type="Submit" value="To student" name="student"style="width:10%;height:18%;font-size:15px;" />


</form></center></div>
<div class="flex-container">
    <footer>Copyright &copy;2018 by Abinesh, Aswin(Department of IT)</footer>
    </div>
    </body>
</html>


		
		}
		
	}
	
	?>

		<script>
		function myFunction(){
		window.print();}
		</script>

	
</body>
</html>	