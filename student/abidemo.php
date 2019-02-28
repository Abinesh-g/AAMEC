<?php

include 'mysqlconn.php';
$Conn=mysqli_connect('localhost','root','');
$sql1= "SHOW DATABASES";
$result1 = mysqli_query($Conn,$sql1);

echo nl2br("showing all databases");

        $dbarr=array();
        $i=0;
        echo nl2br("\n");

        while($row = mysqli_fetch_row($result1))
        {   
        	echo nl2br("\n $row[0]");
            $dbarr[$i]=$row[0];
            $i++;
        }
        //$sec=substr($copyvar[$i],4,4);

echo nl2br("\n \n IT DEPT STAFF");
for($i=0;$i<count($dbarr);$i++)
{
    $depname= substr($dbarr[$i],0,2);
    if(!(strcmp("it",$depname)) )
        echo nl2br("\n $dbarr[$i]");
    
}

echo nl2br("\n \n CSE DEPT STAFF");
for($i=0;$i<count($dbarr);$i++)
{
    $depname= substr($dbarr[$i],0,2);
    if(!(strcmp("cs",$depname)) )
        echo nl2br("\n $dbarr[$i]");


    
}
for($j=7;$j<count($dbarr);$j++)
{
echo nl2br("\n $dbarr[$j]");
//echo();
}
?>