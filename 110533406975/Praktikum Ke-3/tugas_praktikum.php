<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login Form sederhana</title>
<script type="text/javascript">

function error1()
{
alert('Password yang anda masukkan salah. Cobalah kembali!');
}

function check()
{
if(formLogin.password.value == "" || formLogin.username.value=="")
{
error1();
}
}
function Huruf(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password Anda Berupa Angka ');
        return false
    }
    return true
}

</script>

<style type="text/css">
#textbox1 {
position:center;
width:100px;
height:25px;
z-index:2;
left: 140px;
top: 257px;
}
#textbox2 {
position:center;
width:300px;
height:115px;
z-index:2;
top: 150px;
left: 50px;
}
#textbox3 {
position:absolute;
width:80px;
height:25px;
z-index:2;
left: 234px;
top: 290px;
}
#header{
width:358px;
height:79px;
background-image: url(a.JPG);
}
#background{
width:358px;
height:250px;
background-image: url(background.JPG);
}
</style>
</head>
<body onLoad="document.formLogin.username.focus();">
<form name="formLogin" method="post" action="KodeQ.php">
<div id="header">
</div>
<div id="background">
<div id="textbox1">
<div align="left"><strong><br>
<span >User Name :</span></strong>
<br>
<input type="text" name="username" size="35" value="" style="background-color:#CCFFCC" autocomplete="off" onKeyUp="return Huruf(event)">
<br>
<br>
<strong>Password : </strong>
<br>
<input type="password" name="password" size="35" style="background-color:#CCFFCC" autocomplete="off" onKeyUp="return Huruf(event)">
<br>
<br>
</div>
</div>
<br>
<div id="textbox3">
<input type="submit" name="submit" value=" L O G I N " onClick="check()">
</div>
</div>
</form>
</body>
</html>