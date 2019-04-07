<?php
$con=mysqli_connect("localhost",'root','',"abm_project");
$sql="select * from person";
$result=mysqli_query($con, $sql);

if($result){
echo '<table width="30%" border="2"  text-align="center">
 	
 	<tr >
 	    <th>ID</th>
 		<th>NAME</th>
 		<th>AGE</th>
 	</tr>

';
while ($row=mysqli_fetch_array($result)) 
{
 echo '<tr>';
	echo '<td>' .$row['id'] .'</td>';
	echo '<td>'.$row['name' ].' </td>';
	echo '<td>'.$row['age' ].' </td>';
		
    
 echo '</tr>';   
}
echo'</table>';
 }
 else
 {
 	echo "query is not created";
 }

?>