<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "linux$11", "details");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM details ORDER BY `details`.register_number,`NAME` ASC";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>NAME</th><th>REGISTERNUMBER</th><th>D.O.B</th><th>GENDER</th><th>BLOODGROUP</th><th>EMAIL</th>
						<th>AADHAR CARD</th><th>BANK ACCOUNT</th><th>PHONE NUMBER</th><th>PAN CARD</th><th>RELIGION</th>
						<th>CASTE</th>
						<th>PLACE OF ARRIVAL</th><th>TRAVALMODE</th>
						<th>NO_OF_SIBLINGS</th><th>FATHERNAME</th><th>MOTHERNAME</th><th>FATHER OCCUPATION</th><th>MOTHER OCCUPATION</th>
						<th>ANNUAL_INCOME</th><th>EMAIL ID</th><th>ADDRESS</th>
						<th>CONTECT</th><th>NAME_OF_SCHOOL</th>
						<th>10TH_MARK</th><th>10TH_PERCENTAGE</th><th>10TH_BOARD</th><th>12TH_MARK</th><th>12TH_PERCENTAGE</th>
						<TH>12TH_BOARD</TH><TH>CUT_OF_MARK</TH><TH>DATE_OF_ADMISSION</TH><TH>FIRST_GRADUATE</TH><TH>QUOTA</TH><TH>SCHOLARSHIP</TH><TH>IMAGE</TH><TH>CGPA</TH>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>
<td>'.$row["register_number"].'</td>
<td>'.$row["dob"].'</td>
<td>'.$row["gender"].'</td>
<td>'.$row["blood_group"].'</td>
<td>'.$row["email"].'</td>
<td>'.$row["aadhar_card"].'</td>
<td>'.$row["bank_account"].'</td>
<td>'.$row["scontact"].'</td>
<td>'.$row["pan"].'</td>
<td>'.$row["religion"].'</td>
<td>'.$row["caste"].'</td>
<td>'.$row["place_of_arrival"].'</td>
<td>'.$row["travel_mode"].'</td>
<td>'.$row["no_of_siblings"].'</td>
<td>'.$row["fname"].'</td>
<td>'.$row["mname"].'</td>
<td>'.$row["foccupation"].'</td>
<td>'.$row["moccupation"].'</td>
<td>'.$row["annual_income"].'</td>
<td>'.$row["pemail"].'</td>
<td>'.$row["address"].'</td>
<td>'.$row["pcontact"].'</td>
<td>'.$row["name_of_school"].'</td>
<td>'.$row["10th_mark"].'</td>
<td>'.$row["10th_percentage"].'</td>
<td>'.$row["10th_board"].'</td>
<td>'.$row["12th_mark"].'</td>
<td>'.$row["12th_percentage"].'</td>
<td>'.$row["12th_board"].'</td>
<td>'.$row["cut_of_mark"].'</td>
<td>'.$row["date_of_admission"].'</td>
<td>'.$row["first_graduate"].'</td>
<td>'.$row["quota"].'</td>
<td>'.$row["scholarship"].'</td>
<td>'.$row["cgpa"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=StudentInformation.xls');
  echo $output;
 }
}
?>
