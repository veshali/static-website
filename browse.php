
<?php 
if(isset($_REQUEST['submit']))
{
$com=mysql_connect("localhost","root","");
if(!$com)
{
die('could not connect:'.mysql_error());
}
mysql_select_db('website',$com);
$Username=$_REQUEST['Username'];
$Password=$_REQUEST['Password'];
$Pass=sha1($_REQUEST['Password']);
$a=mysql_query("select * from details where Username='".$Username."' and Password='".$Pass."'");
$b=mysql_fetch_array($a);
if(mysql_num_rows($a)>0)
{
session_start();
$_SESSION['Username']=$Username;
setcookie('uname',$Username,time()+600);
setcookie('pass',$Password,time()+600);
header('location:part3.php');
}
else
{
?>
<script type="text/javascript">
alert("Please enter correct imformation");
</script>
<?php 
}
mysql_close($com);
}
?>

<html>
<head>
<title>Browse</title>
<link rel="stylesheet" type="text/css" href="browse.css">
<script type="text/javascript">
function error()
{
if(document.getElementById("name").value=="")
{
alert("Please enter username");
document.getElementById("name").focus();
return false;
}
if(document.getElementById("password").value=="")
{
alert("Please enter password");
document.getElementById("password").focus();
return false;
}
var pa=document.getElementById("password").value;
if(pa.length!=10)
{
alert("Please enter a valid password");
document.getElementById("password").value="";
document.getElementById("password").focus();
return false;
}

}
</script>
</head>
<body>
<div id="wrapper">
<div class="header">
<img src="images/logo.png">
</div>

<div class="container">
<table  cellspacing="20px" cellpadding="5px" align="center" frame="box" bordercolor="#CCCCCC" style="padding-left:70; padding-right:70; padding-bottom:10; padding-top:10; margin-bottom:20; margin-top:15;">
<form method="get">
<tr>
<td width="20%" align="center"><font color="#FF0000" size="5"><b>Sign in</b></font></td>
<td width="30%"><b>Sign in using your Institutional/Profile login credentials. In case you do not have the login credentials please contact your librarian.
U</b></td>
</tr>
<tr>
<td colspan="2"><hr color="#CCCCCC"></td>
</tr>
<tr>
<td width="20%" align="center"><font size="4"><label>Username:</label></font></td>
<td width="30%"  align="left"><input type="text" name="Username" align="middle" size="20px" id="name" title="Username" value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname'];}?>" ></td>
</tr>
<tr>
<td width="20%"  align="center"><font size="4"><label>Password:</label></font></td>
<td width="30%"  align="left"><input type="password" name="Password" align="middle" size="20px" id="password" title="Password should be of length 10 only" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];}?>"></td>
</tr>
<tr>
<td width="20%" align="right"><a href="#">Forgot Password</a></td>
<td align="center" width="30%"><input type="submit" name="submit" value="login" onClick="return error();"></td>
</tr>
</form>
</table>
</div>

<div class="footer">
<img src="images/logo-informatics.png" hspace="150px">
<table align="left">
<tr>
<td><a href="#" style="color:#000000;">About</a> | <a href="#" style="color:#000000;">FAQ</a> | <a href="#" style="color:#000000;">Contact us</a></td>
</tr>
<tr>
<td>Copyright © 2018 . Informatics India Ltd. All Rights Reserved.</td>
</tr>
</table>
</div>

</div>
</body>
</html>
