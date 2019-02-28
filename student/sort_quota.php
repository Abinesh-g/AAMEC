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
<a href="sort_main.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>

<form action="sort_quota1.php" class="text-center" method="post"><br><br><br><br><br><br>
<div class="row">
    <div class="col-6">
        Starting Reg.no:<input type="number" class="form-control" onkeypress="return (event.charCode > 47 && event.charCode < 58)" name="t1" required>
    </div>
    <div class="col-6">
        Ending Reg.no:<input type="number" class="form-control" onkeypress="return (event.charCode > 47 && event.charCode < 58)" name="t2" required>
    </div>
</div><br>

QUOTA:<select class="form-control" name="quota" >
<option value="Government Quota">GOVERNMENT QUOTA</option>
<option value="Management Quota"> MANAGEMENT QUOTA</option>
<option value="Sports Quota"> SPORTS QUOTA</option>
</select>
<br>

<input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" ><br>
<p class="mt-1 mb-1 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin,Govindharaj</p>
</form>
</body>
</html>