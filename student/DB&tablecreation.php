<?php
$con=mysqli_connect('localhost','root','');
	if($con)
	{
	//echo nl2br( "\n server connected");
	}
	else
	{
	 echo nl2br("\n server not connected");
	}
	if(mysqli_select_db($con,'r17'))
	{
	//echo nl2br("\n db connected ");
	}
	else
	{
	echo nl2br("\n db not connected");
	}

$sql="CREATE TABLE itsem1 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}


$sql="CREATE TABLE itsem2 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}

$sql="CREATE TABLE itsem3 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}

$sql="CREATE TABLE itsem4 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}

$sql="CREATE TABLE itsem5 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}

$sql="CREATE TABLE itsem6 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}

$sql="CREATE TABLE itsem7 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}
$sql="CREATE TABLE itsem8 (subcode varchar(10), subname varchar(70)) ";

$result=mysqli_query($con,$sql);
if($result)
{
	echo nl2br("table crated");
}




?>