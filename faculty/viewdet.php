<?php 
session_start();
$dept=$_SESSION["dept"] ;
$name=$_SESSION["name"] ;
$db=$_SESSION["db"] ;
  	$con=mysqli_connect('localhost','root','');
	if($con)
	{
	//echo nl2br( "\n server connected");
	}
	else
	{
	 echo nl2br("\n server not connected");
	}
	if(mysqli_select_db($con,$db))
	{
	//echo nl2br("\n db connected ");
	}
	else
	{
	echo nl2br("\n db not connected");
	}
	
	//$reg_no=$_POST['reg_no'];

$sql="SELECT * FROM details ";

if ($result=mysqli_query($con,$sql))
  {
	 $i=0;
	 $copy=array();
  while ($row=mysqli_fetch_row($result))
    {
	for($i=0;$i<count($row);$i++)
	$copy[$i]=$row[$i];
    }
	
  $i=0;
  mysqli_free_result($result);
	}

	//$j=1;
	$sql1="SELECT * FROM degree ";

	if ($result1=mysqli_query($con,$sql1))
  	{
  	 $t1=1;
	 $i1=0;$j=1;
	 
	 //$copy1.=$j;
	 $copy1=array();
	 	 while ($row1=mysqli_fetch_row($result1))
	     {
		 for($i1=0;$i1<count($row1);$i1++)
		 $copy1[$j][$i1]=$row1[$i1];
		 $j++;$t1=$t1+1;
	     }
	
 	 $i1=0;$j=1;
 	 mysqli_free_result($result1);
	}
	
$sql2="SELECT * FROM experience ";

	if ($result2=mysqli_query($con,$sql2))
  	{
	 $i2=0;$j1=1;
	 $t2=1;
	 //$copy1.=$j;
	 $copy2=array();
	 	 while ($row2=mysqli_fetch_row($result2))
	     {
		 for($i2=0;$i2<count($row2);$i2++)
		 $copy2[$j1][$i2]=$row2[$i2];
		 $j1++;
		 $t2=$t2+1;
	     }
	
 	 $i2=0;$j1=1;
 	 mysqli_free_result($result2);
	}

$sql3="SELECT * FROM course ";

	if ($result3=mysqli_query($con,$sql3))
  	{
	 $i3=0;$j2=1;
	 $t3=1;
	 //$copy1.=$j;
	 $copy3=array();
	 	 while ($row3=mysqli_fetch_row($result3))
	     {
		 for($i3=0;$i3<count($row3);$i3++)
		 $copy3[$j2][$i3]=$row3[$i3];
		 $j2++;
		 $t3=$t3+1;
	     }
	
 	 $i3=0;$j2=1;
 	 mysqli_free_result($result3);
	}


$sql4="SELECT * FROM guest_lucture ";

	if ($result4=mysqli_query($con,$sql4))
  	{
	 $i4=0;$j3=1;
	 $t4=1;
	 //$copy1.=$j;
	 $copy4=array();
	 	 while ($row4=mysqli_fetch_row($result4))
	     {
		 for($i4=0;$i4<count($row4);$i4++)
		 $copy4[$j3][$i4]=$row4[$i4];
		 $j3++;
		 $t4=$t4+1;
	     }
	
 	 $i4=0;$j3=1;
 	 mysqli_free_result($result4);
	}

$sql5="SELECT * FROM publication ";

	if ($result5=mysqli_query($con,$sql5))
  	{
	 $i5=0;$j4=1;
	 $t5=1;
	 //$copy1.=$j;
	 $copy5=array();
	 	 while ($row5=mysqli_fetch_row($result5))
	     {
		 for($i5=0;$i5<count($row5);$i5++)
		 $copy5[$j4][$i5]=$row5[$i5];
		 $j4++;
		 $t5=$t5+1;
	     }
	
 	 $i5=0;$j4=1;
 	 mysqli_free_result($result5);
	}

$sql6="SELECT * FROM award ";

	if ($result6=mysqli_query($con,$sql6))
  	{
	 $i6=0;$j5=1;
	 $t6=1;
	 //$copy1.=$j;
	 $copy6=array();
	 	 while ($row6=mysqli_fetch_row($result6))
	     {
		 for($i6=0;$i6<count($row6);$i6++)
		 $copy6[$j5][$i6]=$row6[$i6];
		 $j5++;
		 $t6=$t6+1;
	     }
	
 	 $i6=0;$j5=1;
 	 mysqli_free_result($result6);
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

<title>Faculty Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="main2.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">FACULTY INFORMATION</a>
	</ul>
</nav>

  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:0%;min-width:600px;" enctype="multipart/form-data">
    <h1 class="text-primary">FACULTY DETAILS</h1><br>
    <div class="justify-content-center">
            
            <?php
          	//$reg=$_POST['reg_no'];
	 			$con=mysqli_connect("localhost","root","");
				//$depname="faculty";
				mysqli_select_db($con,$db);
				$qry="SELECT * FROM details";
				$result=mysqli_query($con,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					
                    echo '<img height="250" width="230" src="data:image;base64,'.$row[37].' "><br>';
					
				}

            ?>
    <div><br>
             
                <div class="row">
                    <div class="col-7 text-left">
                        DEPT: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DOB: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        GENDER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BLOOD GROUP: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         E-MAIL ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        AADHAR CARD NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                      BANK ACCOUNT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PASSPORT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PAN CARD NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                                <div class="row">
                    <div class="col-7 text-left">
                        RELIGION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CASTE: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        PLACE OF ARRIVAL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        TRAVEL MODE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        NUMBER OF SIBLINGS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MARITAL STATUS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        LANGUAGE KNOWN: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        HOBBIES: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
<br>
<br>
<br>
<h1 class="text-primary">PARENT DETAILS</h1>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ANNUAL INCOME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <br>

<br>
<h1 class="text-primary">ACADEMIC DETAILS</h1>
<br>			<H2>SSLC</H2><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MARK: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        YEAR: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div>


                <br><br><br><br>

                <H2>HSC</H2><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MARK: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        YEAR: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>






               <h1 class="text-primary">DEGREE DETAILS</h1><br>  
                     <?php  
                     for($j=1;$j<$t1;$j++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
                 		echo'<div class="row"><div class="col-7 text-left">';
                        echo "DEGREE:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
                		echo'<div class="row"><div class="col-7 text-left">';
                        echo "DEPT:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "CGPA:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "INSTITUTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"> <div class="col-7 text-left">';
                        echo "UNIVERSITY:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
                		echo'<div class="row"><div class="col-7 text-left">';
                        echo "YEAR OF PASSING:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
                		echo'<div class="row"><div class="col-7 text-left">';
                        echo "PROJECT:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j][$i1];$i1++; echo'</div></div><br>';
						//echo nl2br ("\n");
                       
                        $i1=0;

                        
                      }

					?> 
					<br>
					<h1 class="text-primary">EXPERIENCE DETAILS</h1><br>   
                     <?php  
                     for($j1=1;$j1<$t2;$j1++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
                 		echo'<div class="row"><div class="col-7 text-left">';
                        echo "INSTITUTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy2[$j1][$i2];$i2++;
                        echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESIGNATION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy2[$j1][$i2];$i2++;
                        echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "JOINING DATE :";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy2[$j1][$i2];$i2++;
                        echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "LEAVE DATE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy2[$j1][$i2];$i2++;
                        echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "TOTAL(YEAR AND MONTH):";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy2[$j1][$i2];$i2++;
                        echo'</div></div><br>';
                        
                        $i2=0;

                        
                      }

					?> 
					<br>
					 <h1 class="text-primary">COURSE DETAILS</h1><br>  
                     <?php  
                     for($j2=1;$j2<$t3;$j2++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "COURSE NAME:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy3[$j2][$i3];$i3++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESCRIPTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy3[$j2][$i3];$i3++; echo'</div></div><br>';
                 		
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "TYPE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy3[$j2][$i3];$i3++; echo'</div></div><br>'; 
                 		
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "START DATE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy3[$j2][$i3];$i3++; echo'</div></div><br>'; 
                 		
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "END DATE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy3[$j2][$i3];$i3++; echo'</div></div><br>'; 
                      
                        $i3=0;

                        
                      }

					?> 

					<br>
					 <h1 class="text-primary">GUESTLECTURE DETAILS</h1><br>  
                     <?php  
                     for($j3=1;$j3<$t4;$j3++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
                 		
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "TITLE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy4[$j3][$i4];$i4++;echo'</div></div><br>';
                 	
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESCRIPTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy4[$j3][$i4];$i4++;echo'</div></div><br>';
                 	
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "PLACE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy4[$j3][$i4];$i4++;echo'</div></div><br>';
                 		
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "DATE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy4[$j3][$i4];$i4++;echo'</div></div><br>';  
                        $i4=0;

                        
                      }

					?> 
					<br>
					 <h1 class="text-primary">PUBLICATION DETAILS</h1><br>  
                     <?php  
                     for($j4=1;$j4<$t5;$j4++) 
                     {  
                     	echo nl2br ("\n");echo nl2br ("\n");
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "TITLE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "AUTHOR NAME:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "PUBLISHER:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "PUBLISHED DATE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "ISBN:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "EDITION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "TOTAL PAGES:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>';
						echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESCRIPTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy5[$j4][$i5];$i5++; echo'</div></div><br>'; 

                        $i5=0;

                        
                      }

					?> 
					<br>
					 <h1 class="text-primary">AWARD DETAILS</h1><br>  
                     <?php  
                     for($j5=1;$j5<$t6;$j5++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
                 		echo'<div class="row"><div class="col-7 text-left">';
                        echo "TITLE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy6[$j5][$i6];$i6++; echo'</div></div><br>';
                 		echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESCRIPTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy6[$j5][$i6];$i6++; echo'</div></div><br>';
                 		echo'<div class="row"><div class="col-7 text-left">';
                        echo "PLACE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy6[$j5][$i6];$i6++; echo'</div></div><br>';
                 		echo'<div class="row"><div class="col-7 text-left">';
                        echo "DATE:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy6[$j5][$i6];$i6++; echo'</div></div><br>';

                        $i6=0;

                        
                      }

					?> 

                    </div>
                </div><br>
                <center><br>
<button onclick="myFunction()">print</button>
</center>
<script>
		function myFunction(){
		window.print();}
		</script>

                <p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>