<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Studi Kasus 1</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Agama
<select name="religion">
<option value="Islam"
<?php
if (empty($_POST['religion'])){ 
$x='empty';
}
else
{
$x=$_POST['religion'];
}
if ($x == 'Islam') {
echo 'selected="selected"';
}
?> 
>Islam <br/>
<option value="Kristen"
<?php
if ($x == 'Kristen') {
echo 'selected="selected"';
}
?> 
>Kristen <br/>
<option value="Hindu"
<?php
if ($x == 'Hindu') {
echo 'selected="selected"';
}
?> 
>Hindu <br/>
<option value="Budha"
<?php
if ($x == 'Budha') {
echo 'selected="selected"';
}
?> 
>Budha
</select> <br />
<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['x'])) {
echo $_POST['x'];
}
?>
</body>
</html>