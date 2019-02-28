    <?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");
 $name =$_POST['name']; 
 $id =$_POST['age']; 
 $number = count($_POST["name"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO tbl_name(name,id) VALUES('$name[$i]','$id[$i]')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 