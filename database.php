<?php
    header("refresh: 2;");
?>
<script type="text/javascript">
scrolldown = function() {
   document.body.scrollTop = document.body.scrollHeight;
}
</script>

<?php
$con=mysqli_connect("localhost","webuser","webpass","SpyBot");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM motors");

echo "<table border='1' id='tableID'>
<tr>
<th>ID</th>
<th>Left motor</th>
<th>Right motor</th>
<th>Timestamp</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['idArvo'] . "</td>";
echo "<td>" . $row['left_motor'] . "</td>";
echo "<td>" . $row['right_motor'] . "</td>";
echo "<td>" . $row['Timestamp'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
