<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Generate Table</title>
</head>

<body bgcolor="white">
<center>
<h1>FUNCTION GENERATE TABLE</h1>
<h3>Menggenerate Matriks CellPada Matriks</h3>
<hr/>
<br>
<br>
<?php
function buat_tabel($baris, $kolom)
{
echo("<table border=\"1\">\n");

for($b = 0; $b < $baris; $b++) {
echo("<tr height=\"30px\">\n");
for($k = 0; $k < $kolom; $k++) {
echo("<td width=\"100px\"></td>\n");
}
echo("</tr>\n");
}
echo("</table>\n");
echo("<h3>Tabel : $baris baris dan $kolom kolom</h3>");
}
buat_tabel(3,4);
?>
</center>
</body>
</html>

