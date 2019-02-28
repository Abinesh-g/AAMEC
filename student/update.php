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

$sql="SELECT * FROM details WHERE register_number='$regno' ";

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
if(isset($_POST['update']))
{

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
    
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $foccupation=$_POST['foccupation'];
    $moccupation=$_POST['moccupation'];
    $annual_income=$_POST['annual_income'];
    $pemail=$_POST['pemail'];
    $address=$_POST['address'];
    $pcontact=$_POST['pcontact'];
    
    //$reg1=$_POST['reg_no1'];
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
    $row=mysqli_fetch_array($res);                    
        $qname="UPDATE details SET name='$name',register_number='$reg',dob='$dob',gender='$gen',blood_group='$blood',email='$email',aadhar_card='$aadhar',bank_account='$bank',scontact='$scontact',pan='$pan',religion='$religion',caste='$caste',place_of_arrival='$place',travel_mode='$travel',no_of_siblings='$siblings',fname='$fname',mname='$mname',foccupation='$foccupation',moccupation='$moccupation',annual_income='$annual_income',pemail='$pemail',address='$address',pcontact='$pcontact',name_of_school='$sname',10th_mark='$ten_mark',10th_percentage='$ten_per',10th_board='$ten_board',12th_mark='$twel_mark',12th_percentage='$twel_per',12th_board='$twel_board',cut_of_mark='$com',date_of_admission='$doa',first_graduate='$first',quota='$quota',scholarship='$scholarship',cgpa='$cgpa' WHERE register_number='$reg1' ";
            $equ=mysqli_query($con,$qname);
            if($equ)
            {
                //echo($reg."\n value");
                echo "<script>alert('value updated successfully!!!...')</script>"; 
            }
            else
            {
                //echo($reg."\n value");
                echo "<script>alert('value notupdated!!!...')</script>"; 
            } 

               
       /*
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
                $Conn=mysqli_connect("localhost","root",ear
");
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
*/

            //}
            
            //echo "work";
    //$reg1=$_POST['reg_no1'];

    
    //echo("works");


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
<a href="reg.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
        <img src="logo.png" alt="Logo" style="width:60px;">
    </ul> -->
    <ul class="nav-item" style="padding-left:460px;">
        <a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
    </ul>
</nav>
  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:10%;min-width:550px;" enctype="multipart/form-data">
  <h1 class="text-primary">STUDENT DETAILS</h1><br>
    
    <div class="justify-content-center">
            

            <?php
            //$reg=$_POST['reg_no'];
                $con=mysqli_connect("localhost","root","linux$11");
                $depname="details";
                mysqli_select_db($con,$depname);
                $qry="SELECT * FROM details";
                $result=mysqli_query($con,$qry);
                //$count=0;
                while($row = mysqli_fetch_array($result))
                {
                    if($row[1]==$regno)
                    {
                    echo '<img height="250" width="230" src="data:image;base64,'.$row[35].' ">';
                    }
                }

            ?>
    <div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value=<?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)"  name="name"> 
                    </div>
                </div><br>
                <?php  $copy[$i];$i++; ?>
                <div class="row">
                    <div class="col-7 text-left">
                       NEW REGISTER NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <input type="text" value=<?php echo $copy[1] ?> onkeypress="return  (event.charCode >47  && event.charCode < 58)"  name="reg_no">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-7 text-left">
                       OLD REGISTER NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <input type="text" value= <?php echo $copy[1] ?> onkeypress="return  (event.charCode >47  && event.charCode < 58)" name="reg_no1">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DOB: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="date" value= <?php echo $copy[$i];$i++; ?>  name="dob" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        GENDER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "  name="gen" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BLOOD GROUP: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  name="blood_group" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         E-MAIL ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="email" value= <?php echo $copy[$i];$i++; ?> name="email" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        AADHAR CARD NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>   onkeypress="return (event.charCode >47  && event.charCode < 58)" name="aadhar_card">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                      BANK ACCOUNT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode >47  && event.charCode < 58)"  name="bank_account">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode >47  && event.charCode < 58)" name="contact" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        POSTAL ACCOUNT NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode >47  && event.charCode < 58)" name="pan" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        RELIGION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "  name="religion">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CASTE: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "  name="caste">
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        PLACE OF ARRIVAL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "   name="place" >
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        TRAVEL MODE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) "  name="travel_mode" >
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        NUMBER OF SIBLINGS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 47 && 
    event.charCode < 58)"  name="no_of_siblings" >
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
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)" name="fname" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >45  && event.charCode < 47)"  name="mname" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  name="foccupation" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="moccupation" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ANNUAL INCOME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode >47  && event.charCode < 58)" name="annual_income" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PARENT E-MAIL ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="email" value=  <?php echo $copy[$i];$i++; ?> name="pemail">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >43  && event.charCode < 47) || (event.charCode > 47 && 
    event.charCode < 58)  " name="address" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode >47  && event.charCode < 58)"  name="pcontact" >
                    </div>
                </div><br>

<br>
<h1 class="text-primary">ACADEMIC DETAILS</h1>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL STUDIED: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) " name="sname" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH MARK: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode >47  && event.charCode < 58)" name="10th_mark">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?>  name="10th_per" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  name="10th_board" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH MARK:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode >47  && event.charCode < 58)"  name="12th_mark" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  name="12th_per" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  name="12th_board">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CUT OF MARK:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> onkeypress="return (event.charCode > 47 && 
    event.charCode < 58) || (event.charCode >45  && event.charCode < 47)"   name="com" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DATE OF ADMISSION:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="date" value=  <?php echo $copy[$i];$i++; ?> name="doa" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FIRST GRADUATE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"    name="first">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        QUOTA:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  name="quota" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        SCHOLARSHIP:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++;$i++; ?>  onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"   name="scholarship" >
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CGPA:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i]; ?> onkeypress="return (event.charCode > 47 && 
    event.charCode < 58) || (event.charCode >45  && event.charCode < 47)" name="cgpa" >
                    </div>

                </div><br><br>
                <input type="submit" value="Update" name="update"><br>
                <p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>
