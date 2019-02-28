<?php
 
 session_start();
$dept=$_SESSION["dept"] ;
$name=$_SESSION["name"] ;
$db=$_SESSION["db"] ;
 if(isset($_POST['submit']))
 {
	//$db=(string)"itdept_s_aswin$aswath";

 $connect = mysqli_connect("localhost", "root", "");
 if(mysqli_select_db($connect,$db))
 {
 	echo "db connected";
 }
 else
 {
 	echo "db not connected";
 }
 
 $number = count($_POST["title"]);
 $title=$_POST['title'];
 $author=$_POST['author'];
 $publisher=$_POST['publisher'];
 $p_date=$_POST['p_date'];
 $isbn=$_POST['isbn'];
 $edition=$_POST['edition'];
 $pages=$_POST['pages'];
 $description=$_POST['description'];

if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["title"][$i] != ''))  
           {  
                $sql = "INSERT INTO publication(title,author,publisher,p_date,isbn,edition,pages,description) VALUES('$title[$i]','$author[$i]','$publisher[$i]','$p_date[$i]','$isbn[$i]','$edition[$i]','$pages[$i]','$description[$i]')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 } 
 } 
?>

<html lang="en"> 
      <head>  
           <title>Faculty Information </title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<meta charset="utf-8">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	</head>
	<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:100px">

    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">FACULTY INFORMATION</a>
	</ul>
</nav>
		<div class="container">
			<br />
			<br />
			<h2 align="center">PUBLICATION INFORMATION</a></h2>
			<div class="form-group">
				
				<form name="add_name" id="add_name" action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">

					<div class="table-responsive"><br><br><br>
						<table class="table table-bordered" id="dynamic_field">
                                    <tr><td><input type="text" name="title[]" placeholder="Enter the title" class="form-control name_list" /></td>  
                                    <tr><td><input type="text" name="author[]" placeholder="Enter the author name " class="form-control name_list" /></td>  
                                    <tr><td><input type="text" name="publisher[]" placeholder="Enter the publisher " class="form-control name_list" /></td>  
                                    <tr><td><input type="text" name="p_date[]" placeholder="Enter the published date " class="form-control name_list" /></td>  
                                    <tr><td><input type="text" name="isbn[]" placeholder="Enter the isbn " class="form-control name_list" /></td>  
                                    <tr><td><input type="text" name="edition[]" placeholder="Enter the edition " class="form-control name_list" /></td> 
                                    <tr><td><input type="text" name="pages[]" placeholder="Enter the total pages " class="form-control name_list" /></td>  
                                    <tr><td><input type="text" name="description[]" placeholder="Enter the description " class="form-control name_list" /></td>  
                                    <tr> <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++; 
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="title[]" placeholder="Enter the title" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="author[]" placeholder="Enter the author name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="publisher[]" placeholder="Enter the publisher" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="p_date[]" placeholder="Enter the published date" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="isbn[]" placeholder="Enter the isbn" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="edition[]" placeholder="Enter the edition" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="pages[]" placeholder="Enter the total pages" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="description[]" placeholder="Enter description" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
          
          
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
