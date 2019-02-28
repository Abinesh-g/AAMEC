
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
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Student Information </title>

</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="detselect.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav>
<form method="post" class="form-signin text-center justify-content-center">
SELECT SEMESTER:<select class="form-control" style="font-size:14px;" name="sem" placeholder="Enter Details" required>
<option value="sem1">Semester-1</option>
<option value="sem2">Semester-2</option>
<option value="sem3">Semester-3</option>
<option value="sem4">Semester-4</option>
<option value="sem5">Semester-5</option>
<option value="sem6">Semester-6</option>
<option value="sem7">Semester-7</option>
<option value="sem8">Semester-8</option>
</select>
<br>
SELECT TEST:<select class="form-control" style="font-size:14px;" name="test" placeholder="select Details" required>
<option value="INTERNAL ASSEMENT-1">Internal Assesment-1</option>
<option value="INTERNAL ASSEMENT-2">Internal Assesment-2</option>
<option value="INTERNAL ASSEMENT-1">Internal Assesment-3</option>
<option value="SEMESTER">Semester</option>
</select><br><br>
<input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit" formaction="cycle_view1.php"><br><br>
<p class="mt-0 mb-5 text-muted">&copy; AAMEC(IT Dept)-Abinesh,Aswin</p>
</form>
</body>
</html>
