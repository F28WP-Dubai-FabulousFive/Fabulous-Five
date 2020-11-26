<?php

require('config.php');
$sql = "SELECT * FROM users order by score desc";
// execute sql statement and store the data in variable $result
$result = mysqli_query($db_link,$sql); 
//

echo "<table border='1' width='100%' style='color:white;font-size:25px;'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Score</th></tr>";
 
$rw="";
//if data exist or not
if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
	  
  echo "<tr>
  <td width='5%'>".$row['id']."</td>
  <td>".$row['username']."</td>
  <td>".$row['email']."</td>
  <td width='15%'>".$row['score']."</td>
  
  
  </tr>";
 
  }
  echo "</table>";
} 
?>