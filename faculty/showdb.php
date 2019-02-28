<?php
        $Conn=mysqli_connect('localhost','root','');
        $i=0;
        $dbarr=array();
     if($stmt = $Conn->query("SHOW DATABASES"))
     {
        echo "No of records : ".$stmt->num_rows."<br>";
        while ($row = $stmt->fetch_assoc()) 
            {
            	$i++;
                echo $row['Database']."<br>";
                $dbarr[$i]=$row['Database'];
            }
            echo count($dbarr); 
    }
    else
        {
        echo $connection->error;
        }

echo nl2br("available dept");

for($i=0;$i< count($dbarr);$i++)
{
	$dep= substr($dbarr[$i], 0,4);
	echo nl2br("\n $dep");
}


echo nl2br("show only dept");

for($i=0;$i< count($dbarr);$i++)
{
	$dep= substr($dbarr[$i], 3,4);
	echo nl2br("\n $dep");
}


?>