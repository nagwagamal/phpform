<?php
$con=mysqli_connect("localhost",'root','',"abm_project");
 $name=$_POST['name'];
$age=$_POST['age'];
$query="insert into person (name,age) values ('$name','$age')";
$result=mysqli_query($con, $query);
 if($result)
 {
    echo "Data inserted successfully";
 }
 else{
  echo "Data not inserted successfully";
 }
?>