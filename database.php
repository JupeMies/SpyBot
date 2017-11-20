<?php
$con=mysqli_connect("localhost","webuser","webpass","har1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM opiskelija");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Year of birth</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['idOpiskelija'] . "</td>";
echo "<td>" . $row['etunimi'] . "</td>";
echo "<td>" . $row['sukunimi'] . "</td>";
echo "<td>" . $row['syntymavuosi'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
