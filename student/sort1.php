<html>
<style>
</style>

<table style="width:1000px; margin:auto; color:white; padding:5px;" border="5" bgcolor="skyblue">
<br>
<center>
<button onclick="myFunction()">print</button>
</center>	
<br>
<br>	
	<tr><th colspan="5"><h1>SORTLIST DETAILS</h1></th></tr>
	<td><h2>Register Number:</h2></td>
	<td><h2>Name:</h2></td>
	<td><h2>10th Mark:</h2></td>
	<td><h2>12th Mark:</h2></td>
	<td><h2>CGPA:</h2></td>
	<tr>
<?php
	

	$con=mysqli_connect('localhost','root','linux$11');
	$db=mysqli_select_db($con,'details');
	if($db)
	{
	//	echo "db connected";

	}
	else
	{
		echo "db not connected";
	}
	$reg1=$_POST['t1'];
	$reg2=$_POST['t2'];
	$ten=$_POST['t3'];
	$twel=$_POST['t4'];
	$cgpa=$_POST['t5'];

	$query=( " SELECT  * FROM  details");
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($res))
	{
		if(($row['register_number']>=$reg1) and ($row['register_number']<=$reg2))
		{
		if(($row['10th_mark']>=$ten) And ($row['12th_mark']>=$twel) And ($row['cgpa']>=$cgpa))
		{
			echo "<tr>";
			//echo nl2br("\n");
			echo "<td>" .$row['register_number']."</td>";
			//echo nl2br("\n");
			echo "<td>" .$row['name']."</td>";	

			echo "<td>" .$row['10th_mark']."</td>";
			//echo nl2br("\n");
			echo "<td>" .$row['12th_mark']."</td>";
			//echo nl2br("\n");
			echo "<td>" .$row['cgpa']."</td>";

		}
		
		}
		
	}
	
	?>

		<script>
		function myFunction(){
		window.print();}
		</script>

	
</body>
</html>	