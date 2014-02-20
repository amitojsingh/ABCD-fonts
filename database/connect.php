<?php
$con=mysql_connect("localhost","root","lab4");
if (!$con)
{
die("could not connect":.mysqli_connect_error());
}
mysql_select_db("ABCD_fonts",$con);
?>

