<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
mysqli_select_db($con,"form");
$cityi=$_POST['frm'];
$cityj=$_POST['tt'];
$type=$_POST['type'];
$nvec=$_POST['nvec'];
$ndate=$_POST['ndate'];

$result = mysqli_query($con,"Select * from search where frm ='".$cityi."' && tt='".$cityj."' && type='".$type."' && nvec='".$nvec."' &&ndate='".$ndate."' "  );
echo "<table>
<tr> 
<th>From</th>
<th>To</th>
<th>Type</th>
<th>No. Of Vechile</th>
<th>Date</th>
</tr>";
while($row =mysqli_fetch_array($result))
{
$n=0;
echo "<tr>";
 echo "<td>" . $row[0]. "</td>";
 echo "<td> " . $row[1]."</td> ";
echo "<td>" . $row[2]."</td>";
echo "<td>" . $row[3]."</td>";
echo "<td>" . $row[4]."</td>";
 echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
