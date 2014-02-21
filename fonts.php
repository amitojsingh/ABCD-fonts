<html>
<head>
<title>fontS</title>
<link rel="stylesheet" type="text/css" href="font_page.css">

</head>
<body>
<div id="sidebar">sidebar</div>
<div id="content">
<?php
include"database/connect.php";
$lang=mysql_query("SELECT *  FROM `Languages`");
echo "$lang";
while($l=mysql_fetch_array($lang))
{
echo "<label><span class=lang>".$l['language']."</span></label>";
}
?>
</div>
</body>
</html>
