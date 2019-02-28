
<?php
session_start();
$dept=$_SESSION["dept"] ;
$name=$_SESSION["name"] ;
$db=$_SESSION["db"] ;
//echo($db);
if(isset($_POST['insert']))
 {
	//echo"<script>alert('hello')</script>";
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
    //echo"works";
    //$dept=$_POST['dept'];
    $name=$_POST['name'];
    $id=$_POST['id'];
    $dob=$_POST['dob'];
    $gen=$_POST['gender'];
    $blood=$_POST['blood_group'];
    $email=$_POST['email'];
    $aadhar=$_POST['aadhar'];
    $bank=$_POST['bank'];
    $passport=$_POST['passport'];
    $pan=$_POST['pan'];
    $scontact=$_POST['contact'];    
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $place=$_POST['place'];
    $travel=$_POST['travel_mode'];
    $siblings=$_POST['siblings'];
    $status=$_POST['status'];
    $language=$_POST['language'];
    $hobbies=$_POST['hobbies'];
    $fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$foccupation=$_POST['foccupation'];
	$moccupation=$_POST['moccupation'];
	$income=$_POST['income'];
	$pcontact=$_POST['pcontact'];
	$address=$_POST['address'];


	$s_name=$_POST['s_name'];
	$s_mark=$_POST['s_mark'];
    $s_percentage=($s_mark/(500))*100;
    $s_board=$_POST['s_board'];
    $s_year=$_POST['s_year'];

    $h_name=$_POST['h_name'];
	$h_mark=$_POST['h_mark'];
    $h_percentage=($h_mark/(1200))*100;
    $h_board=$_POST['h_board'];
    $h_year=$_POST['h_year'];

    

					$image= addslashes($_FILES['image']['tmp_name']);
                    $name1= addslashes($_FILES['image']['name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
                    //saveimage($name,$image);


		    $query=( " SELECT  * FROM  details ");
		    $res=mysqli_query($con,$query);
		    $row=mysqli_fetch_array($res);
		    
        	$qname="INSERT INTO details(dept,name,id,dob,gender,blood_group,email,aadhar,bank,passport,pan,contact,religion,caste,place,travel_mode,siblings,status,language,hobbies,f_name,m_name,f_occupation,m_occupation,income,p_contact,address,s_school,s_mark,s_percentage,s_board,s_year,h_school,h_mark,h_percentage,h_board,h_year,image) VALUES('$dept','$name','$id','$dob','$gen','$blood','$email','$aadhar','$bank','$passport','$pan','$scontact','$religion','$caste','$place','$travel','$siblings','$status','$language','$hobbies','$fname','$mname','$foccupation','$moccupation','$income','$pcontact','$address','$s_name','$s_mark','$s_percentage','$s_board','$s_year','$h_name','$h_mark','$h_percentage','$h_board','$h_year','$image')";
            $equ=mysqli_query($con,$qname);
            if($equ)
            {
                echo nl2br($name."\n value");
                echo ("\n inserted successfully...");
            }
            else
            {
                echo($name."\n value");
                echo nl2br("\n not inserted");
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

<title>Faculty Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="main.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px;color: #fff" >FACULTY INFORMATION</a>
	</ul>
</nav>



<form action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">
<h2>FACULTY DETAILS</h2><BR><BR>

<div class="row">
<div class="col-md-12 mb-3">
<label for="oldregno">NAME:</label>
<input type="text" class="form-control" name="name"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)" placeholder="Enter Details" required>
<br></div></div>

<div class="row">
              <div class="col-md-6 mb-3">
                <label for="newregno">ID</label>
                <input type="text" class="form-control" name="id" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Reg No. is required.
                </div>
              </div>
             <div class="col-md-6 mb-3">
                <label for="dob">D.O.B:</label>
                <input type="date" class="form-control" name="dob" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Date is required.
                </div>
              </div> 
              
            </div>
<br>

<div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="gen">GENDER:</label>
                <select class="form-control" name="gender" required>
<option value="Male">Male
</option>
<option value="Female">Female
</option> 
</select>
                <div class="invalid-feedback">
                  Valid Gender is required.
                </div>
              </div>
            
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
              </div></div>
<br>


<div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="email">E-MAIL ID:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid E-Mail is required.
                </div>
              </div>
         

<div class="col-md-6 mb-3">
 <label for="email">AADHAR CARD NUMBER:</label><input type="number" class="form-control" name="aadhar" placeholder="Enter Details" required>
<br></div>   </div>
BANK ACCOUNT NUMBER:<input type="number" class="form-control" name="bank" placeholder="Enter Details" required>
<br>
PASSPORT NUMBER:<input type="number" class="form-control" name="passport" placeholder="Enter Details" >
<br>
<div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="email">PAN CARD NUMBER:</label>
                <input type="number" class="form-control" name="pan"   onkeypress="return  (event.charCode >47  && event.charCode < 58)" placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Postal Acc.No. is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="contact">CONTACT NUMBER:</label>
                <input type="tel" class="form-control" name="contact"    onkeypress="return  (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{10}" placeholder="Enter Details"  required>
                <div class="invalid-feedback">
                  Valid Contact No. is required.
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
                    <option value="Others"> Others</option>
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
                <input type="text" class="form-control" name="place"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) " placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Place is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="travelmode">TRAVEL MODE:</label>
                <select class="form-control" name="travel_mode" required>
                    <option value="College bus">College bus</option>
                    <option value="Out bus">Out bus</option>
                    <option value="Train">Train</option>
                    <option value="Others"> Others</option>

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
                <select class="form-control" name="siblings" placeholder="Enter Details" required>
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
                <label for="siblings">MARITAL STATUS:</label> <select class="form-control" name="status" placeholder="Enter Details" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    </select>
                    </div><br>
</div>
<div class="row">
<div class="col-md-6 mb-3">
              LANGUAGE KNOWN:</label><input type="text" class="form-control" name="language"  placeholder="Enter Details"   required></div>
<div class="col-md-6 mb-3">
HOBBIES:<input type="text" class="form-control" name="hobbies" placeholder="Enter Details"   required></div>
 </div>
 <br>  
                UPLOAD PHOTO:
                <input type="file" class="form-control" name="image"placeholder="Enter Details" required>
                <div class="invalid-feedback">
                  Valid Travel Mode is required.
                </div>
              
<br><br><br><br><br>
<h1>PARENT DETAILS</h1><br>

FATHER NAME:<input type="text" class="form-control" name="fname"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)"placeholder="Enter Details"   required>
<br>
MOTHER NAME:<input type="text" class="form-control" name="mname"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)" placeholder="Enter Details"   required>
<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="focc">FATHER OCCUPATION:</label>
                <input type="text" class="form-control" name="foccupation"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Details" required >
                <div class="invalid-feedback">
                  Valid Father Occupation is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="mocc">MOTHER OCCUPATION:</label>
                <input type="text" class="form-control" name="moccupation"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Details"   required>
                <div class="invalid-feedback">
                  Valid Mother Occupation is required.
                </div>
              </div>
            </div>
<br>
<div class="row">
              <div class="col-md-6 mb-3">
                <label for="income">ANNUAL INCOME:</label>
                <input type="number" class="form-control" name="income"  onkeypress="return (event.charCode >47  && event.charCode < 58)" placeholder="Enter Details"   required>
                <div class="invalid-feedback">
                  Valid Annual Income is required.
                </div>
              </div>
             
           
<br>
<div class="col-md-6 mb-3">
                <label for="income">CONTACT NUMBER:</label><input type="tel"  class="form-control" name="pcontact"   onkeypress="return (event.charCode >47  && event.charCode < 58)" pattern="[0-9]{10}" placeholder="Enter Details"   required> </div></div>

 



<br>
ADDRESS:<input type="text" class="form-control" name="address" placeholder="Enter Details"   required>
<br>

<br>
<br>
<br>

<h1>ACADEMIC DETAILS</h1><br>
<h2>SSLC:</h2><br><br><BR>

<div class="row">
 <div class="col-md-6 mb-3">
 <label for="mocc">INSTITUTION:</label><input type="text" class="form-control" name="s_name"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"   placeholder="Enter Details" required></div>
<div class="col-md-6 mb-3">
 <label for="mocc">MARK:</label><input type="number" max="500" class="form-control" name="s_mark"   onkeypress="return (event.charCode >47  && event.charCode < 58)"  placeholder="Enter Details" required></div>
 </div>
<br>
<div class="row">
<div class="col-md-6 mb-3">
 <label for="mocc">BOARD OF STUDY:</label><input type="text" class="form-control" name="s_board"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"   placeholder="Enter Details" required></div>
<br><div class="col-md-6 mb-3">
 <label for="mocc">YEAR OF PASSING:</label><input type="date" class="form-control" name="s_year"   placeholder="Enter Details" required>
<br></div></div><br><br>


<h2>HSC:</h2><br><br><BR>
 
<div class="row">
 <div class="col-md-6 mb-3">
 <label for="mocc">INSTITUTION:</label><input type="text" class="form-control" name="h_name"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"   placeholder="Enter Details" required></div>
<br>
<div class="col-md-6 mb-3">
 <label for="mocc">MARK:</label><input type="number" max="1200" class="form-control" name="h_mark"   onkeypress="return (event.charCode >47  && event.charCode < 58)"  placeholder="Enter Details" required></div>
 </div>
<div class="row">
<div class="col-md-6 mb-3">
 <label for="mocc">BOARD OF STUDY:</label><input type="text" class="form-control" name="h_board"  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"   placeholder="Enter Details" required></div>
<br><div class="col-md-6 mb-3">
 <label for="mocc">YEAR OF PASSING:</label><input type="date" class="form-control" name="h_year"   placeholder="Enter Details" required>
<br></div></div>
<center>

              <div class="col-4">
                <input type="submit" value="ADD NEW" class="btn btn-lg btn-primary btn-block" name="insert" >
              </div>  
</center>

<p class="mt-2 mb-3 text-center" >&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>