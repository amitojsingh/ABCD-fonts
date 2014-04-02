<?php
$con=mysql_connect("localhost","root","gurparsad");
echo $con;
if (!$con)
{
die("could not connect".mysql_error());
}
mysql_select_db("ABCD_fonts",$con);
?>

