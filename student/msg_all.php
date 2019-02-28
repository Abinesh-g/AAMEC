<?php






if(isset($_POST['submit']))
{

$reg1=$_POST['reg1'];
$reg2=$_POST['reg2'];

		$sem=$_POST['sem'];
		$test=$_POST['test'];
		echo($sem.$test);

		//$regno="820415205001";

	$con=mysqli_connect('localhost','root','');
    if($con)
    {
  // echo nl2br( "\n server connected");
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
$sql="SELECT * FROM details ";

if ($result=mysqli_query($con,$sql))
  {
  	echo "inside if";

while($row=mysqli_fetch_array($result))
	{
		echo "inside while";
		$i=0;
		$number=array();
	  	$row5=mysqli_fetch_row($result);
	  
		$number[$i]=$row5[22];
	    echo $number[$i];
	    $i++;
	}
  mysqli_free_result($result);

}
	$con1=mysqli_connect('localhost','root','');
    if($con1)
    {
  // echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
    if(mysqli_select_db($con1,'marks'))
    {
    //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }
	$sql1="SELECT * FROM marks WHERE(register_number='$reg1' AND test_name='$test' AND semester ='$sem') ";

	if ($result1=mysqli_query($con1,$sql1))
 	 {
  	
	$i1=0;$i2=4;
	$j=13;
	//echo nl2br("\n".$j);
	$mark=array();
 while ($row1=mysqli_fetch_row($result1))
    {
   	//echo "hai";
	for($i1=0;$i1<count($row1);$i1++,$j++,$i2++)
	{
	if($j>=0 AND $j<22)
	{
	$mark[$i1]=$row1[$j];
	}
	if($i1<9 AND $i2<13)
	{
    $msg .=nl2br("\n".$row1[$i2]."\n".$mark[$i1]);
	//echo($msg);
	}
	}
    
    }

  mysqli_free_result($result1);

}

//echo($number[1]);
echo($msg);

}







		
	










?>
<html>
<head>
<body><form method="post" action="">
starting reg.no:<input type="text" name="reg1"> ending reg.no:<input type="text" name="reg2">
<br>
Semester:<select name="sem">
<option value="sem1">SEMESTER 1</option> 
<option value="sem2">SEMESTER 2</option> 
<option value="sem3">SEMESTER 3</option> 
<option value="sem4">SEMESTER 4</option> 
<option value="sem5">SEMESTER 5</option> 
<option value="sem6">SEMESTER 6</option> 
<option value="sem7">SEMESTER 7</option> 
<option value="sem8">SEMESTER 8</option> 
</select>
<br>
Exam:<select name="test">
<option value="ct1">INTERNAL ASSESSMENT-I</option> 
<option value="ct2">INTERNAL ASSESSMENT-II</option> 
<option value="ct3">INTERNAL ASSESSMENT-III</option> 
</select><br>
<input type="submit" name="submit" value="submit">
</form></body>
</head>
</html>