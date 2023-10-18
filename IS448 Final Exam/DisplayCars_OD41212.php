<head><title> Display Data </title> 
<link rel=stylesheet href=css/style_OD41212.css> 
</head>

<?php
include 'member_OD41212.php';


require 'dbcon_OD41212.php';

$sql = "SELECT cid, cname, cyear, cprice, cdetails
FROM  DisplayCars_OD41212";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href=nprofessor_OD41212.php >     <A Href=home_OD41212.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from DisplayCars Table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Carld </TD><TD> CarName </TD><TD> CarYear </TD><TD> CarPrice </TD><TD> CarDetails </TD><TD> </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["cid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cname"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cyear"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cprice"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cdetails"];
		echo "</TD>";
		echo "<TD>";
        echo "";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=delcar_OD41212.php?cid=$row[cid]> <img src=image/delete_OD41212.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
