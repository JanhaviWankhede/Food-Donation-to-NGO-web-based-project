<html>
<body>
<center>
<table border='1'>

<?php
include'datasource.php';

           $result = mysqli_query($attendance ,"SELECT * FROM hotel_food");
mysqli_close($attendance);
echo "<table border='1'>
<tr>
<th>Food name</th>
<th>Food prepare date</th>
<th>Food quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['food_name'] . "</td>";
echo "<td>" . $row['food_prepdate'] . "</td>";
echo "<td>" . $row['food_quantity'] . "</td>";
echo "</tr>";
}
echo "</table>";
 
?>
</table>
</center>
</body>
</html>

