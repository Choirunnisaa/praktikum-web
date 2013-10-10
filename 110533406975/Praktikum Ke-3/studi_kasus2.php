<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Studi Kasus 2</title>
</head>
<body>
<?php
	echo "Hobbi :";
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="checkbox" name="hobby[]" value="Membaca"
<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	if ($x == 'Membaca') {
	echo 'checked="checked"';
}
}
}
?>/>Membaca<br/>
<input type="checkbox" name="hobby[]" value="Olahraga"
<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	if ($x == 'Olahraga') {
	echo 'checked="checked"';
}
}
}
?>/>Olahraga<br/>
<input type="checkbox" name="hobby[]" value="Menyanyi"
<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	if ($x == 'Menyanyi') {
	echo 'checked="checked"';
}
}
}
?>/>Menyanyi<br/>
<input type="checkbox" name="hobby[]" value="Menari"
<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	if ($x == 'Menari') {
	echo 'checked="checked"';
}
}
}
?>/>Menari<br/>
<input type="checkbox" name="hobby[]" value="Travelling"
<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	if ($x == 'Travelling') {
	echo 'checked="checked"';
}
}
}
?>/>Travelling<br/>
<input type="checkbox" name="hobby[]" value="Kuliner"
<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	if ($x == 'Kuliner') {
	echo 'checked="checked"';
}
}
}
?>/>Kuliner<br/>
<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['hobby'])) {
  foreach ($_POST['hobby'] as $key => $x) {
	echo $key.'->'.$x.'<br/>';
}
}
?>
</body>
</html>