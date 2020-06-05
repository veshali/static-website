<?php
include("connect.php");
$aname=$_REQUEST['aname'];
if(isset($_REQUEST['submit']))
{
$file=$_FILES['Pfile'];
$a=rand(1,1000);
$pname=$a.$file['name'];
$size=$file['size'];
$type=$file['type'];
$path=$file['tmp_name'];
move_uploaded_file($path,'gallary/'.$pname);
mysql_query("insert into photomaster(AName,PName,Size,Type) values('".$aname."','".$pname."','".$size."','".$type."')");
}
?>




<html>
<head>
<title>Browse</title>
<link rel="stylesheet" type="text/css" href="aaa.css">
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
   
   <li><a href='#'><font size="4" face="Arial, Helvetica, sans-serif">Contact</font></a></li>
  
   <li><a href='#'><font size="4" face="Arial, Helvetica, sans-serif">Facilities</font></a></li>
   <li><a href="logout.php"><font size="4" face="Arial, Helvetica, sans-serif">logout</font></a></li>
   
   
   <li><a href='photogallery.php'><font size="4" face="Arial, Helvetica, sans-serif">Gallery</font></a></li> 

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
<table  cellspacing="20px" cellpadding="5px" align="center" frame="box" bordercolor="#666666" style="padding-left:70; padding-right:70; padding-bottom:10; padding-top:10; border-left:hidden; border-right:hidden; border-bottom:hidden;" width="1080" bgcolor="#E5E5E5">
<form method="post" enctype="multipart/form-data">
<tr><td><font size="5"><b>Add a photo to your album</b></font><input type="file" name="Pfile"><input type="submit" name="submit"></td>
<td align="right"><font size="4" color="#000000"><b><a href="adminalbum.php" style="text-decoration:none;">Back to Gallary</a></b></font></b></font></td></tr>
<?php
$a=mysql_query("select Id,PName from photomaster where AName='".$aname."'");
if(mysql_num_rows($a)>0)
{ ?>
<ul>
<?php while($b=mysql_fetch_array($a))
{ ?>
<li style="display:inline;"><table style="display:inline; margin-left:30px;"><tr><td><a href="gallary/<?php echo $b['PName']; ?>"><img src="gallary/<?php echo $b['PName']; ?>" width="160px" height="150px"/></td></tr>
<tr><td align="center" bgcolor="#CCCCCC"><a href="delete1.php?id=<?php echo $b['Id'];?>" onClick="return confirm('Are you sure to delete?');" style="text-decoration:none;"><font size="4" color="#000000"><b>delete</b></font></a></td></tr></table></li>
<?php } ?>
</ul>
<?php }
else
{
echo "No Record found";
} ?>
</form>
</table>
</div>






<div class="footer" style="background-color:#E5E5E5; border-bottom:medium;">
</div>

</div>
</body>
</html>
