<?php

session_start();

$type=$_SESSION['type'];
$sem=$_SESSION['sem'];
if(($_SESSION['type']) and  ($_SESSION['sem']))
{
  //echo (" sess work");
  echo nl2br("\n");
}



  //$type="r13itsem1";
  $con=mysqli_connect('localhost','root','linux$11');
    if($con)
    {
   //echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
if(isset($_POST['update']))
{
//echo"inside update";

  $register_number=$_POST['register_number'];
  $register_number1=$_POST['register_number1'];
  $test=$_POST['test'];
  $sub1=$_POST['s1'];
  $sub2=$_POST['s2'];
  $sub3=$_POST['s3'];
  $sub4=$_POST['s4'];
  $sub5=$_POST['s5'];
  $sub6=$_POST['s6'];
  $mark1=$_POST['m1'];
  $mark2=$_POST['m2'];
  $mark3=$_POST['m3'];
  $mark4=$_POST['m4'];
  $mark5=$_POST['m5'];
  $mark6=$_POST['m6'];
    if(mysqli_select_db($con,'marks'))
    {
   //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }

   $query=( " SELECT  * FROM  marks ");
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);             
        $qname="UPDATE marks SET type='$type',register_number='$register_number',semester='$sem',test_name='$test',sub1='$sub1',sub2='$sub2',sub3='$sub3',sub4='$sub4',sub5='$sub5',sub6='$sub6',mark1='$mark1',mark2='$mark2',mark3='$mark3',mark4='$mark4',mark5='$mark5',mark6='$mark6' WHERE(register_number='register_number1') ";
           if($qname)
           {
           // echo "correct";
           }
            $equ=mysqli_query($con,$qname);
           // echo "hiii";
            if($equ)
            {
              echo "<script>alert('mark inserted successfully!!!...')</script>";
            }
            else
            {
              echo "<script>alert('mark not inserted')</script>";
            }
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

if(isset($_POST['insert']))
{


  $register_number=$_POST['register_number'];
  $test=$_POST['test'];

  $mark1=$_POST['m1'];
  $mark2=$_POST['m2'];
  $mark3=$_POST['m3'];
  $mark4=$_POST['m4'];
  $mark5=$_POST['m5'];
  $mark6=$_POST['m6'];
    if(mysqli_select_db($con,'marks'))
    {
   //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }

   $query=( " SELECT  * FROM  marks ");
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);
    
        $qname="INSERT INTO marks(type,register_number,semester,test_name,sub1,sub2,sub3,sub4,sub5,sub6,mark1,mark2,mark3,mark4,mark5,mark6) VALUES('$type','$register_number','$sem','$test','$copy[1]','$copy[2]','$copy[3]','$copy[4]','$copy[5]','$copy[6]','$mark1','$mark2','$mark3','$mark4','$mark5','$mark6')";
            $equ=mysqli_query($con,$qname);
            if($equ)
            {
              echo "<script>alert('mark inserted successfully!!!...')</script>";
            }
            else
            {
              echo "<script>alert('mark not inserted')</script>";
            }
 }     
  
  //mysqli_free_result($row1); 

  
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
<a href="cycle.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>
<form class="text-center" style="padding-top:100px" method="post">

<div class="row">
              <div class="col-lg-12 mb-3">
                <label for="newregno">REGISTER NUMBER:</label>
                <input type="number" class="form-control" name="register_number" onkeypress="return (event.charCode > 47 && 
    event.charCode < 58)" placeholder="Enter Details" required>
              </div>
             
</div>
<br><br>

<div class="row">
              <div class="col-lg-12 mb-3">
                <label for="testtype">TEST TYPE:</label>
                <select name="test" class="form-control" required>
                   <option value="ct1">INTERNAL ASSEMENT-1</option>
                   <option value="ct2">INTERNAL ASSEMENT-2</option>
                   <option value="ct3">INTERNAL ASSEMENT-3</option>
                   <option value="sem">SEMESTER EXAM</option>
                </select>
               </div>
</div>
<br><br><br>

<div class="row">
             <div class="col-lg-7 text-left">
               <?php $sub1=$copy[$i];echo($sub1); $i++; ?>:
             </div>
             <div class="col-lg-5">
                <input type="number" class="form-control"  onkeypress="return (event.charCode > 47 && event.charCode < 58)"name="m1"  required><br>
             </div>
</div>
<div class="row">
            <div class="col-lg-7 text-left">
               <?php $sub2= $copy[$i];echo($sub2);$i++; ?> :
             </div>
             <div class="col-5 ">
                <input type="number" class="form-control"  onkeypress="return (event.charCode > 47 && event.charCode < 58)"name="m2"  required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-7 text-left"> <?php $sub3=$copy[$i]; echo($sub3);$i++; ?> :
             </div>
             <div class="col-5">
                <input type="number" class="form-control"  onkeypress="return (event.charCode > 47 && event.charCode < 58)" name="m3"  required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-7 text-left"><?php $sub4= $copy[$i];echo($sub4);$i++; ?> :
             </div>
             <div class="col-5">
                <input type="number" class="form-control"  onkeypress="return (event.charCode > 47 && event.charCode < 58)"name="m4"  required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-7 text-left">  <?php $sub5= $copy[$i];echo($sub5);$i++; ?> :
             </div>
             <div class="col-5">
                <input type="number" class="form-control"  onkeypress="return (event.charCode > 47 && event.charCode < 58)"name="m5" required><br>
             </div>
</div>
<div class="row">
             <div class="col-lg-7 text-left"><?php $sub6=$copy[$i];echo($sub6);$i++; ?> :
             </div>
             <div class="col-5">
                <input type="number" class="form-control"  onkeypress="return (event.charCode > 47 && event.charCode < 58)"name="m6" required><br>
             </div>
</div>
<br><br>
<br><br>
<div class="row">
             <div class="col-12 text-left">
                  <input type="submit" class="btn btn-lg btn-primary btn-block" name="insert" value="Insert">
             </div>
</div>
<p class="mt-2 mb-3 text-center" >&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</head>
</html>	
