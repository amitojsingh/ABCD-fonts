<html>
<head>
<title>fontS</title>
<link rel="stylesheet" type="text/css" href="font_page.css">

</head>
<body>
<div class="sidebar">sidebar</div>
<div id="content">
<?php
include"database/connect.php";
$lang=mysql_query("SELECT *  FROM `Languages`");
//echo "$lang";
while($l=mysql_fetch_array($lang))
{
echo "<a href='#'><label style= font-family:".$l['font-family']."><span class=lang>".$l['language']."</span></label></a>";
}
?>
<h2>fonts for testting</h2>
<h1>fonts with h1 tag</h1>
</div>
</body>
</html>
