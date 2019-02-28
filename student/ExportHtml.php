<?php
$connect = mysqli_connect("localhost", "root", "", "details");
$sql = "SELECT * FROM details ORDER BY `details`.register_number,`NAME` ASC";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head> 
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Student Inform </title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body class="" background="bg1.png"></body>


    
 

  <div class="container">  
      <br /> <br> 
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export Data Into ExcelFormat</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                        <th>NAME</th><th>REGISTERNUMBER</th><th>DATE.OF.BIRTH</th><th>GENDER</th><th>BLOODGROUP</th><th>EMAIL</th>
						<th>AADHAR CARD</th><th>BANK ACCOUNT</th><th>PHONE NUMBER</th><th>PAN CARD</th><th>RELIGION</th>
						<th>CASTE</th>
						<th>PLACE OF ARRIVAL</th><th>TRAVALMODE</th>
						<th>NO_OF_SIBLINGS</th><th>FATHERNAME</th><th>MOTHERNAME</th><th>FATHER OCCUPATION</th><th>MOTHER OCCUPATION</th>
						<th>ANNUAL_INCOME</th><th>EMAIL ID</th><th>ADDRESS</th>
						<th>CONTECT</th><th>NAME_OF_SCHOOL</th>
						<th>10TH_MARK</th><th>10TH_PERCENTAGE</th><th>10TH_BOARD</th><th>12TH_MARK</th><th>12TH_PERCENTAGE</th>
						<TH>12TH_BOARD</TH><TH>CUT_OF_MARK</TH><TH>DATE_OF_ADMISSION</TH><TH>FIRST_GRADUATE</TH><TH>QUOTA</TH><TH>SCHOLARSHIP</TH><TH>IMAGE</TH><TH>CGPA</TH>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        ?>
       <tr>  
        <td><?=$row["name"];?></td>
<td><?=$row["register_number"];?></td>
<td><?=$row["dob"];?></td>
<td><?=$row["gender"];?></td>
<td><?=$row["blood_group"];?></td>
<td><?=$row["email"];?></td>
<td><?=$row["aadhar_card"];?></td>
<td><?=$row["bank_account"];?></td>
<td><?=$row["scontact"];?></td>
<td><?=$row["pan"];?></td>
<td><?=$row["religion"];?></td>
<td><?=$row["caste"];?></td>
<td><?=$row["place_of_arrival"];?></td>
<td><?=$row["travel_mode"];?></td>
<td><?=$row["no_of_siblings"];?></td>
<td><?=$row["fname"];?></td>
<td><?=$row["mname"];?></td>
<td><?=$row["foccupation"];?></td>
<td><?=$row["moccupation"];?></td>
<td><?=$row["annual_income"];?></td>
<td><?=$row["pemail"];?></td>
<td><?=$row["address"];?></td>
<td><?=$row["pcontact"];?></td>
<td><?=$row["name_of_school"];?></td>
<td><?=$row["10th_mark"];?></td>
<td><?=$row["10th_percentage"];?></td>
<td><?=$row["10th_board"];?></td>
<td><?=$row["12th_mark"];?></td>
<td><?=$row["12th_percentage"];?></td>
<td><?=$row["12th_board"];?></td>
<td><?=$row["cut_of_mark"];?></td>
<td><?=$row["date_of_admission"];?></td>
<td><?=$row["first_graduate"];?></td>
<td><?=$row["quota"];?></td>
<td><?=$row["scholarship"];?></td>
<td><img src="\<?=$row["image"];?>"></td>
<td><?=$row["cgpa"];?></td>
       </tr>  
        <?php  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
    <center>
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    <p class="mt-5 mb-3 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
    </center>
    </form>
   </div>  
  </div>  
 </body>  
</html>


