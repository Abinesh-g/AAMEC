<?php

if(isset($_POST['update']))
{

    $con=mysqli_connect('localhost','root','linux$11');
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
    $name=$_POST['name'];
    


    $reg=$_POST['reg_no'];   $reg1=$_POST['reg_no1'];
    $dob=$_POST['dob'];
    $gen=$_POST['gen'];
    $blood=$_POST['blood_group'];
    $email=$_POST['email'];
    $aadhar=$_POST['aadhar_card'];
    $bank=$_POST['bank_account'];
    $scontact=$_POST['contact'];
    $pan=$_POST['pan'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $place=$_POST['place'];
    $travel=$_POST['travel_mode'];
    $siblings=$_POST['no_of_siblings'];
    
    $query=( " SELECT  * FROM  details ");
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);                    
        $qname="UPDATE details SET name='$name',register_number='$reg',dob='$dob',gender='$gen',blood_group='$blood',email='$email',aadhar_card='$aadhar',bank_account='$bank',scontact='$scontact',pan='$pan',religion='$religion',caste='$caste',place_of_arrival='$place',travel_mode='$travel',no_of_siblings='$siblings' WHERE register_number='$reg1' ";
            $equ=mysqli_query($con,$qname);
            if($equ)
            {
               // echo($reg."\n value");
               echo ("\n student inserted successfully...");
            }
            else
            {
                echo($reg."\n value");
                echo nl2br("\n not inserted");
            } 

                $reg1=$_POST['reg_no1'];
                if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
                {
                    echo "Please select an image";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
                    saveimage($name,$image);
                }
            
            function saveimage($name,$image)
            {
                $reg1=$_POST['reg_no1'];
                $Conn=mysqli_connect("localhost","root","");
                $depname="details";
                mysqli_select_db($Conn,$depname);


                $qry="UPDATE  details set image='$image' where register_number='$reg1' ";
                

                $result=mysqli_query($Conn,$qry);
                if($result)
                {
                    echo "<br/>Image uploaded";         
                }
                else
                {
                    echo "<br/>Image not uploaded";
                }
            }


            //}
            
            //echo "work";
	$reg1=$_POST['reg_no1'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$foccupation=$_POST['foccupation'];
	$moccupation=$_POST['moccupation'];
	$annual_income=$_POST['annual_income'];
	$pemail=$_POST['pemail'];
	$address=$_POST['address'];
	$pcontact=$_POST['pcontact'];
	
	$query=( " SELECT  * FROM  details ");
	$res=mysqli_query($con,$query);
	$row=mysqli_fetch_array($res);
	//echo nl2br("\n before while");
	
		$qname="UPDATE details SET fname='$fname',mname='$mname',foccupation='$foccupation',moccupation='$moccupation',annual_income='$annual_income',pemail='$pemail',address='$address',pcontact='$pcontact' WHERE register_number='$reg1' ";
			$equ=mysqli_query($con,$qname);
			if($equ)
			{
				//echo($reg."\n value");
				echo ("\n parent inserted successfully...");
			}
			else
			{
				echo($reg."\n value");
				echo nl2br("\n parent  not inserted");
			}
	$reg1=$_POST['reg_no1'];
	$sname=$_POST['sname'];
	$ten_mark=$_POST['10th_mark'];
	$ten_per=$_POST['10th_per'];
	$ten_board=$_POST['10th_board'];
	$twel_mark=$_POST['12th_mark'];
	$twel_per=$_POST['12th_per'];
	$twel_board=$_POST['12th_board'];
	$com=$_POST['com'];
	$doa=$_POST['doa'];
	$first=$_POST['first'];
	$quota=$_POST['quota'];
	$scholarship=$_POST['scholarship'];
	$cgpa=$_POST['cgpa'];
	
	$query=( " SELECT  * FROM  details ");
	$res=mysqli_query($con,$query);
	//$row=mysqli_fetch_array($res);
	//echo nl2br("\n before while");
	while($row=mysqli_fetch_array($res))
	{
		//echo nl2br("\n inside while");
		echo nl2br("\n");
		
		$qname="UPDATE details SET name_of_school='$sname',10th_mark='$ten_mark',10th_percentage='$ten_per',10th_board='$ten_board',12th_mark='$twel_mark',12th_percentage='$twel_per',12th_board='$twel_board',cut_of_mark='$com',date_of_admission='$doa',first_graduate='$first',quota='$quota',scholarship='$scholarship',cgpa='$cgpa' WHERE register_number='$reg1' ";
			$equ=mysqli_query($con,$qname);
			if($equ)
			{
				//echo($reg."\n value");
				echo ("\n academic inserted successfully...");
			}
			else
			{
				echo($reg."\n value");
				echo nl2br("\n academic  not inserted");
			}
			
		
	}
	echo("works");


}
if(isset($_POST['insert']))
 {
	//echo"<script>alert('hello')</script>";
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
    //echo"works";
    $name=$_POST['name'];
    $reg=$_POST['reg_no'];
    $dob=$_POST['dob'];
    $gen=$_POST['gen'];
    $blood=$_POST['blood_group'];
    $email=$_POST['email'];
    $aadhar=$_POST['aadhar_card'];
    $bank=$_POST['bank_account'];
    $scontact=$_POST['contact'];
    $pan=$_POST['pan'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $place=$_POST['place'];
    $travel=$_POST['travel_mode'];
    $siblings=$_POST['no_of_siblings'];
    $fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$foccupation=$_POST['foccupation'];
	$moccupation=$_POST['moccupation'];
	$annual_income=$_POST['annual_income'];
	$pemail=$_POST['pemail'];
	$address=$_POST['address'];
	$pcontact=$_POST['pcontact'];
	$sname=$_POST['sname'];
	$ten_mark=$_POST['10th_mark'];
	$ten_per=($ten_mark/(500))*100;

	$ten_board=$_POST['10th_board'];
	$twel_mark=$_POST['12th_mark'];
	$twel_per=($twel_mark/(1200))*100;
	$twel_board=$_POST['12th_board'];
	$com=$_POST['com'];
	$doa=$_POST['doa'];
	$first=$_POST['first'];
	$quota=$_POST['quota'];
	$scholarship=$_POST['scholarship'];
	$cgpa=$_POST['cgpa'];
    

					$image= addslashes($_FILES['image']['tmp_name']);
                    //$name= addslashes($_FILES['image']['name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
                    //saveimage($name,$image);


    $query=( " SELECT  * FROM  details ");
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);
    
        $qname="INSERT INTO details(name,register_number,dob,gender,blood_group,email,aadhar_card,bank_account,scontact,pan,religion,caste,place_of_arrival,travel_mode,no_of_siblings,fname,mname,foccupation,moccupation,annual_income,pemail,address,pcontact,name_of_school,10th_mark,10th_percentage,10th_board,12th_mark,12th_percentage,12th_board,cut_of_mark,date_of_admission,first_graduate,quota,scholarship,image,cgpa) VALUES('$name','$reg','$dob','$gen','$blood','$email','$aadhar','$bank','$scontact','$pan','$religion','$caste','$place','$travel','$siblings','$fname','$mname','$foccupation','$moccupation','$annual_income','$pemail','$address','$pcontact','$sname','$ten_mark','$ten_per','$ten_board','$twel_mark','$twel_per','$twel_board','$com','$doa','$first','$quota','$scholarship','$image','$cgpa')";
            $equ=mysqli_query($con,$qname);
            if($equ)
            {
               // echo nl2br($reg."\n value");
                echo "<script>alert('value inserted successfully!!!...')</script>"; 
            }
            else
            {
                echo($reg."\n value");
                echo "<script>alert('value notinserted!!!...')</script>"; 
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

<title>Student Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="select.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px;color: #fff" >STUDENT INFORMATION</a>
	</ul>
</nav>



<form action="" class="text-center" method="post" style="padding-top:1%" enctype="multipart/form-data">
<h1>STUDENT DETAILS</h1><br>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="newregno">NAME:</label>
<input type="text" class="form-control" name="name" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)" placeholder="Enter Details" required>
<br></div>

              <div class="col-md-6 mb-3">
                <label for="newregno">REGISTER NUMBER</label>
                <input type="tel" class="form-control" name="reg_no"  onkeypress="return  (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{12}" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Reg No. is required.
                </div>
              </div>
              
            </div>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="dob">D.O.B:</label>
                <input type="date" class="form-control" name="dob" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Date is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="gen">GENDER:</label>
                <select class="form-control" name="gen" required>
<option value="Male">Male
</option>
<option value="Female">Female
</option> 
</select>
                <div class="invalid-feedback">
                  Valid Gender is required.
                </div>
              </div>
            </div>
<br>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="bg">BLOOD GROUP:</label>
                <select class="form-control" name="blood_group"  required>
                    <option value="A+ve">A+ve</option>
                    <option value="A-ve">A-ve</option>
                    <option value="B+ve">B+ve</option>
                    <option value="B-ve">B-ve</option>
                    <option value="AB+ve">AB+ve</option>
                    <option value="AB-ve">AB-ve</option>
                    <option value="O+ve">O+ve</option>
                    <option value="O-ve">O-ve</option>
                </select>
                <div class="invalid-feedback">
                  Valid Bloodd Group is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="email">E-MAIL ID:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid E-Mail is required.
                </div>
              </div>
            </div>
<br>

AADHAR CARD NUMBER:<input type="tel" class="form-control" name="aadhar_card" pattern="[0-9]{12}"  onkeypress="return  (event.charCode >47  && event.charCode < 58)"  placeholder="Enter Details" required>
<br>
BANK ACCOUNT NUMBER:<input type="number" class="form-control" name="bank_account" onkeypress="return  (event.charCode >47  && event.charCode < 58)" placeholder="Enter Details" required>
<br>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="contact">CONTACT NUMBER:</label>
                <input type="tel" class="form-control" name="contact" onkeypress="return  (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{10}" placeholder="Enter Details"  required>
                <div class="invalid-feedback">
                  Valid Contact No. is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="email">POSTAL ACCOUNT NUMBER:</label>
                <input type="number" class="form-control" name="pan" onkeypress="return  (event.charCode >47  && event.charCode < 58)" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Postal Acc.No. is required.
                </div>
              </div>
            </div>
<br>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="religion">RELIGION:</label>
                <select class="form-control" name="religion" required>
                    <option value="Hindu"> Hindu</option>
                    <option value="Muslim"> Muslim</option>
                    <option value="Christian"> Christian</option>
                </select>
                <div class="invalid-feedback">
                  Valid Religion is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="caste">CASTE:</label>
                <select  class="form-control" name="caste"  required>
                    <option value="B.C">B.C</option>
                    <option value="M.B.C">M.B.C</option>
                    <option value="S.C">S.C</option>
                    <option value="O.C">O.C</option>
                    <option value="OTHERS">OTHERS</option>
                </select>
                <div class="invalid-feedback">
                  Valid Caste is required.
                </div>
              </div>
            </div>
<br>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="place">PLACE OF ARRIVAL:</label>
                <input type="text" class="form-control" name="place" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Place is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="travelmode">TRAVEL MODE:</label>
                <select class="form-control" name="travel_mode" required>
                    <option value="Collegebus">College bus</option>
                    <option value="Outbus">Out bus</option>
                    <option value="Train">Train</option>
                    <option value="Others">Others</option>
                </select>
                <div class="invalid-feedback">
                  Valid Travel Mode is required.
                </div>
              </div>
            </div>
<br>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="siblings">NUMBER OF SIBLINGS:</label>
                <select class="form-control" name="no_of_siblings" placeholder="Enter Details" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
            </select>
                <div class="invalid-feedback">
                  Valid No. of Siblings is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="pic">UPLOAD PHOTO:</label>
                <input type="file" class="form-control" name="image"placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Travel Mode is required.
                </div>
              </div>
            </div>
<br>

<br>
<br>
<br>


<h1>PARENT DETAILS</h1><br>

FATHER NAME:<input type="text" class="form-control" name="fname"onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)" placeholder="Enter Details"   required>
<br>
MOTHER NAME:<input type="text" class="form-control" name="mname" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)"placeholder="Enter Details"   required>
<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="focc">FATHER OCCUPATION:</label>
                <input type="text" class="form-control" name="foccupation" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "  placeholder="Enter Details" required >
                <div class="invalid-feedback">
                  Valid Father Occupation is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="mocc">MOTHER OCCUPATION:</label>
                <input type="text" class="form-control" name="moccupation" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) " placeholder="Enter Details"   required>
                <div class="invalid-feedback">
                  Valid Mother Occupation is required.
                </div>
              </div>
            </div>
<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="income">ANNUAL INCOME:</label>
                <input type="number" class="form-control" name="annual_income" onkeypress="return  (event.charCode >47  && event.charCode < 58)" placeholder="Enter Details"   required>
                <div class="invalid-feedback">
                  Valid Annual Income is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="pemail">PARENT E-MAIL ID</label>
                <input type="email" class="form-control" name="pemail"  placeholder="Enter Details"  >
                <div class="invalid-feedback">
                  Valid Parent E-mail is required.
                </div>
              </div>
            </div>
<br>
ADDRESS:<input type="text" class="form-control" name="address" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >43  && event.charCode < 47) || (event.charCode > 47 && 
    event.charCode < 58)  " placeholder="Enter Details"   required>
<br>
CONTACT NUMBER:<input type="tel" class="form-control" name="pcontact" onkeypress="return  (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{10}" placeholder="Enter Details"   required>
<br>
<br>
<br>
<br>

<h1>ACADEMIC DETAILS</h1><br>

NAME OF THE SCHOOL LAST STUDIED:<input type="text" class="form-control" name="sname" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "  placeholder="Enter Details" required>
<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="10thmark">10TH MARK:</label>
                <input type="tel" class="form-control" name="10th_mark" onkeypress="return  (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{3}"  placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid 10th Mark is required.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="10thboard">10TH BOARD OF STUDIED:</label>
                <input type="text" class="form-control" name="10th_board" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  placeholder="Enter Details"  required>
                <div class="invalid-feedback">
                  Valid 10th board of studied is required.
                </div>
              </div>

             
            </div>
<br>
<div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="12thmark">12TH MARK:</label>
                <input type="tel" class="form-control" name="12th_mark" onkeypress="return  (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{4}"  placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid 12th Mark is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="12thboard">12TH BOARD OF STUDIED:</label>
                <input type="text" class="form-control" name="12th_board" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) " placeholder="Enter Details"  required>
                <div class="invalid-feedback">
                  Valid 12th board of studied is required.
                </div>
              </div>

            </div>
<br>


<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="cutoff">CUT OFF MARK:</label>
                <input type="number" class="form-control" onkeypress="return (event.charCode > 47 && 
    event.charCode < 58) || (event.charCode >45  && event.charCode < 47)"name="com"   placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Cut off mark is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="Admissiondate">DATE OF ADMISSION:</label>
                <input type="date" class="form-control" name="doa"  placeholder="Enter Details"  required>
                <div class="invalid-feedback">
                  Valid Date of Admission is required.
                </div>
              </div>
            </div>

<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="fg">FIRST GRADUATE:</label>
                <select class="form-control" name="first" required>
                    <option value="applicable"> APPLICABLE</option>
                    <option value="non-applicable"> NON-APPLICABLE</option>
                </select>
                <div class="invalid-feedback">
                  Valid First graduate is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="quota">QUOTA:</label>
                <select class="form-control" name="quota" required>
                    <option value="governmentquota">GOVERNMENT QUOTA</option>
                    <option value="managementquota"> MANAGEMENT QUOTA</option>
                        <option value="sportsquota"> SPORTS QUOTA</option>
                </select>
                <div class="invalid-feedback">
                  Valid Quota is required.
                </div>
              </div>
            </div>

<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="schl">SCHOLARSHIP:</label>
                <select class="form-control" name="scholarship" required>
                    <option value="applicable"> APPLICABLE</option>
                    <option value="non-applicable"> NON-APPLICABLE</option>
                </select>
                <div class="invalid-feedback">
                  Valid Scholarship is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cgpa">LAST SEMESTER CGPA:</label>
                <input type="number" class="form-control" name="cgpa"  onkeypress="return (event.charCode > 47 && 
    event.charCode < 58) || (event.charCode >45  && event.charCode < 47)"  placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid CGPA is required.
                </div>
              </div>
            </div>

<div class="row mt-5  mb-5" >
              
                <input type="submit" value="ADD NEW" class="btn btn-lg btn-primary btn-block" name="insert" >
                

</div>

<p class="mt-2 mb-3 text-center" >&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script> -->
</body>
</html>



