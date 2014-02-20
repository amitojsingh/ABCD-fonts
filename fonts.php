<html>
<head>
<link rel="stylesheet" type="text/css" href="font_page.css">
</head>
<body>
<div id="sidebar">
sidebar
</div>
<div>
<?php
include("database/connect.php");
$lang=mysqli_query($con,"SELECT `language` FROM `Languages`");
while($l=mysqli_fetch_array($lang))
{
echo "<label>".$l."</label>";
}
?>
</div>
</body>
</html>
