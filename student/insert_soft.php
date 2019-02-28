<?php


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
            if(mysqli_select_db($con,'photos'))
            {
            //echo nl2br("\n db connected ");
            }
            else
            {
            echo nl2br("\n db not connected");
            }


                $reg=$_POST['reg_no'];
                $reg1=$_POST['reg_no1'];
                   // $image=file_get_contents($_FILES['ten']['tmp_name1']);


                    $image1= addslashes($_FILES['image']['tmp_name1']);
                    //$name1= addslashes($_FILES['image1']['name']);
                    $image1=file_get_contents($image1);
                    $image1=base64_encode($image1);
                    //saveimage($name,$image);

                    $image2= addslashes($_FILES['twel']['tmp_name2']);
                    //$name2= addslashes($_FILES['twel']['name']);
                    $image2=file_get_contents($image2);
                    $image2=base64_encode($image2);

                    $image3= addslashes($_FILES['aadhar_front']['tmp_name3']);
                    //$name3= addslashes($_FILES['aadhar_front']['name']);
                    $image3=file_get_contents($image3);
                    $image3=base64_encode($image3);

                    $image4= addslashes($_FILES['aadhar_back']['tmp_name4']);
                    //$name4= addslashes($_FILES['aadhar_back']['name']);
                    $image4=file_get_contents($image4);
                    $image4=base64_encode($image4);

                    $image5= addslashes($_FILES['passbook']['tmp_name5']);
                    //$name5= addslashes($_FILES['passbook']['name']);
                    $image5=file_get_contents($image5);
                    $image5=base64_encode($image5);

                    $image6= addslashes($_FILES['first_graduate']['tmp_name6']);
                    //$name6= addslashes($_FILES['first_graduate']['name']);
                    $image6=file_get_contents($image6);
                    $image6=base64_encode($image6);


    $query1=( " SELECT  * FROM  ten ");
    $query2=( " SELECT  * FROM  twel ");
    $query3=( " SELECT  * FROM  aadhar ");
    $query4=( " SELECT  * FROM  passbook ");
    $query5=( " SELECT  * FROM  first_graduate ");

    $res1=mysqli_query($con,$query1);
    $row1=mysqli_fetch_array($res1);
    
    $res2=mysqli_query($con,$query2);
    $row2=mysqli_fetch_array($res2);
    
    $res3=mysqli_query($con,$query3);
    $row3=mysqli_fetch_array($res3);
    
    $res4=mysqli_query($con,$query4);
    $row4=mysqli_fetch_array($res4);
    
    $res5=mysqli_query($con,$query5);
    $row5=mysqli_fetch_array($res5);
    
        $qname1="INSERT INTO ten(register_number,ten) VALUES('$reg','$image1')";
        $qname2="INSERT INTO twel(register_number,twel) VALUES('$reg','$image2')";
        $qname3="INSERT INTO aadhar(register_number,aadhar_front,aadhar_back) VALUES('$reg','$image3','$image4')";
        $qname4="INSERT INTO passbook(register_number,ten) VALUES('$reg','$image5')";
        $qname5="INSERT INTO first_graduate(register_number,ten) VALUES('$reg','$image6')";
            
            $equ1=mysqli_query($con,$qname1);
            $equ2=mysqli_query($con,$qname2);
            $equ3=mysqli_query($con,$qname3);
            $equ4=mysqli_query($con,$qname4);
            $equ5=mysqli_query($con,$qname5);



            if($equ1 and $equ2 and $equ3 and $equ4 and $equ5)
            {
                echo nl2br($reg."\n value");
                echo ("\n inserted successfully...");
            }
            else
            {
                echo($reg."\n value");
                echo nl2br("\n not inserted");
            }
 }
?>
<html>
<head>
<body>
<form action="" method="post" enctype="multipart/form-data">
NEW REGISTER NUMBER:<input type="text" name="reg_no" placeholder="Enter Details" required>
OLD REGISTER NUMBER:<input type="text" name="reg_no1" placeholder="Enter Details">
<br>

ten:<input type="file" name="ten"placeholder="Enter Details" required>
<br>

twel:<input type="file" name="twel"placeholder="Enter Details" required>
<br>

aadhar_front:<input type="file" name="aadhar_front"placeholder="Enter Details" required>
<br>

aadhar_back:<input type="file" name="aadhar_back"placeholder="Enter Details" required>
<br>

passbook:<input type="file" name="passbook"placeholder="Enter Details" required>
<br>

first:<input type="file" name="first_graduate"placeholder="Enter Details" required>
<br>
<input type="submit" value="insert" name="insert" >
<br>
<input type="submit" value="update" name="update" >
</form>
</body>
</head>
</html>
