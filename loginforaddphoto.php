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
header('location:adminalbum.php?no=1');
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
<link rel="stylesheet" type="text/css" href="aaa.css">
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


<link href="nav/dropdown.css" rel="stylesheet" type="text/css">       
        <link rel="stylesheet" href="cssmenu/styles.css">

        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="cssmenu/script.js"></script>
   
 

</head>
<body>
<div id="wrapper">
<div class="header" style="background-color:#E5E5E5;">
<img src="images/ymca_affiliation_header2.jpg" width="1078px" height="201" border="2" style="border-bottom:hidden; border-left-color:#CCCCCC; border-right-color:#CCCCCC; border-top-color:#CCCCCC;">
</div>
<div class="nav">
<ul id="MMK-menu" style="width:1078px;">
   <li><a href="index.php"><font size="4" face="Arial, Helvetica, sans-serif">Home</font></a></li>
   
   
   <li><a href='#'><font size="4" face="Arial, Helvetica, sans-serif">About us</font></a></li>
   
   <li><a href='#'><font size="4" face="Arial, Helvetica, sans-serif">Our institutes</font></a></li>
   
   <li><a href="contact.php"><font size="4" face="Arial, Helvetica, sans-serif">Contact us</font></a></li>
   
   
   <li><a href='#'><font size="4" face="Arial, Helvetica, sans-serif">Facilities</font></a></li>
  
   <li><a href="photogallery.php"><font size="4" face="Arial, Helvetica, sans-serif">Gallery</font></a></li> 
<li><a href='#'><font size="4" face="Arial, Helvetica, sans-serif">logout</font></a></li>   
   
</ul>
</div>
<div class="container" style="background-color:#E5E5E5; width:1080px;">

<table width="1100px" cellspacing="20">
<tr><TD width="320px" style="vertical-align:10px;"><h1 align="center" style="background-color:#CCCCCC;">Current News</h1>
<table width="320px">
<tr>
<td>
<marquee direction="up" scrollamount="2" height="180px" onMouseOver="Javascript:stop();" onMouseOut="Javascript:start();">
<ul><li><font size="2"><a href="#">PROCEEDINGS OF NATIONAL CONFERENCE RSTTMI 2016</a><br>Click here to download Proceedings of National Conference RSTTMI 2016.<br><a href="#">Read more</a><br>
</font></li>
<li><font size="2"><a href="#">DEAN MERIT CERTIFICATE FOR THE EXAMS HELD IN...</a><br>Click here to download list of students.<br>
Click here to download list of students.<br><a href="#">Read more</a><br></font></li>
<li><font size="2"><a href="#">FEES NOTICE FOR B.TECH. 7TH SEM.</a><br><a href="#">Read more</a><br></font></li>
<li><font size="2"><a href="#">TENTATIVE SYLLABUS OF ME, AE AND MAE FOR...</a><br>
Tentative syllabus of ME, AE and MAE can be viewed using following links: ME AE MAE<br><a href="#">Read more</a><br></font></li>
<li><font size="2"><a href="#">DMC PDFS OF B.TECH. MECH, EL, ECE, CE,...</a><br>
B.Tech. CE EIC IT 5TH SEM 2015-2019 B.Tech. ECE EL MECH 5TH SEM 2015-2019<br><a href="#">Read more</a><br></font></li>
</ul>
</marquee>
</td>
</tr>
</table>
</TD>
<td width="380px" style="vertical-align:8px;">
<hr>
<table>
<tr>
<td><input type="text" value="Search-in-journals" size="25"></td>
<td><input type="submit" value="J-Gate" style="background-color:orange"></td>
</tr>
<tr>
<td colspan="3" style="text-align:right"><a href="browse.php" target="_parent" style="text-decoration:none;color:#000000;">Browse Journals A-Z</a></td>
</tr>
<tr>
<td colspan="3" width="380px"><hr></td>
</tr>
<tr>
<td colspan="3" style="text-align:center"><font size="5"><a href="NIRF 2018.php" target="_parent">NIRF 2018</a></font></td>
</tr>
<tr>
<td colspan="3" width="380px"><hr></td>
</tr>
<br>
<tr>
<td colspan="3" width="380px"><br></td>
</tr>
<tr>
<td colspan="3" width="380px"><br></td>
</tr>
 
<tr>
<td colspan="2"><input type="text" value="Google coustom search" size="35px"></td>
<td><input type="submit" value="Search"></td>
</tr>

</table>
</td>


<TD width="400px"><h1 align="center" style="background-color:#CCCCCC;" >VC's Message</h1>
<img style="float:right;" src="images/vc_dinesh.jpg" height="150px" width="120px" hspace="5">
<p align="justify"><font size="2">YMCA University of Science and Technology has been in existence for the past 48 years and consistently been contributing towards creation of competent engineering professionals and entrepreneurs.</font></p>
<p><font size="4">Dr. Dinesh Kumar</font></p></TD></tr>
</table>
<table  cellspacing="20px" cellpadding="5px" align="center" frame="box" bordercolor="#666666" style="padding-left:70; padding-right:70; padding-bottom:10; padding-top:10; border-left:hidden; border-right:hidden;" width="1080" bgcolor="#E5E5E5">
<form method="get">
<tr>
<td><font color="#FF0000" size="5"><b>To add any other album.Please login here.</b></font></td>
<td align="center"><font size="5"><b><a href="photogallery.php" style="text-decoration:none;"><img src="images/download 4.jpg" height="80" width="250"></td></tr></a></b></font>
<tr>
<td colspan="2"><hr color="#CCCCCC"></td>
</tr>
<tr>
<td align="center"><font size="4"><label>Username:</label></font></td>
<td align="left"><input type="text" name="Username" align="middle" size="20px" id="name" title="Username" value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname'];}?>" ></td>
</tr>
<tr>
<td align="center"><font size="4"><label>Password:</label></font></td>
<td align="left"><input type="password" name="Password" align="middle" size="20px" id="password" title="Password should be of length 10 only" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];}?>"></td>
</tr>
<tr>
<td width="20%" align="right"><a href="#">Forgot Password</a></td>
<td align="center" width="30%"><input type="submit" name="submit" value="login" onClick="return error();"></td>
</tr>
</form>
</table>
</div>

<div class="footer" style="background-color:#E5E5E5; border-bottom:medium;">
<table width="1080px" style="font-size:12px; color:#00663; margin-left:21px;">
<tr>
<td>| Quick Links |</td><td>| Internal Quality Assurance Cell (IQAC) |</td><td>| Feedback 360 |</td><td>| Library Resources |</td><td>| General Resources |</td><td>| Useful resources |</td>


<tr>
<td><a href="#" style="color:#006600;">UGC</a></td>
<td><a href="#" style="color:#006600;">About IQAC</a></td>
<td><a href="#" style="color:#006600;">Parents Feedback</a></td>
<td><a href="#" style="color:#006600;">e-resources</a></td>
<td><a href="#" style="color:#006600;">News Feeds</a></td>
<td><a href="#" style="color:#006600;">Holidays List</a></td>
</tr>
<tr>
<td><a href="#" style="color:#006600;">DTE,Haryana</a></td>
<td><a href="#" style="color:#006600;">IQAC Members</a></td>
<td><a href="#" style="color:#006600;">Alumni Feedback</a></td>
<td><a href="#" style="color:#006600;">Magazines</a></td>
<td><a href="#" style="color:#006600;">Tenders</a></td>
<td><a href="#" style="color:#006600;">Recruitment</a></td>
</tr>
<tr>
<td><a href="#" style="color:#006600;">HSTES</a></td>
<td><a href="#" style="color:#006600;">IQAC Minutes</a></td>
<td><a href="#" style="color:#006600;">Students Feedback</a></td>
<td><a href="#" style="color:#006600;">Journals</a></td>
<td><a href="#" style="color:#006600;">YMCAUST Journal</a></td>
<td><a href="#" style="color:#006600;">Downloads</a></td>
</tr>
<tr>
<td><a href="#" style="color:#006600;">NPTEL</a></td>
<td><a href="#" style="color:#006600;">IQAC Activities</a></td>
<td><a href="#" style="color:#006600;">Industry Feedback</a></td>
<td><a href="#" style="color:#006600;">Newspapers</a></td>
<td><a href="#" style="color:#006600;">Photo Gallery</a></td>
<td><a href="#" style="color:#006600;">Contact us</a></td>
</tr>
<tr>
<td width="1080px" colspan="5"><hr></td>
</tr>
<tr>
<td colspan="6" align="center"><b><font color="#0033CC" size="2" style="background-color:#333333;">2009-2016 YMCA University of Science and Technology, Faridabad All rights reserved.</font></b></td>
</tr>
</table>
<hr>
</div>

</div>
</body>
</html>

