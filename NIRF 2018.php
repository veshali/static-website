<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db('website',$con);
$a=mysql_query("Select * from file where Page_Id='NIRF'");
$b=mysql_fetch_array($a);
if(isset($_REQUEST['click']))
{
$fname=$_FILES['file'];
$a=rand(1,100);
$name=$a.$fname['name'];
$path=$fname['tmp_name'];
$size=$fname['size'];
$type=$fname['type'];
if($type=='image/jpeg'||$type=='image/png')
{
move_uploaded_file($path,'upload/'.$name);
mysql_query("update file set File_Name='".$name."',File_Size='".$size."',File_Type='".$type."',File_Path='".$path."' where Page_Id='NIRF'");
header('location:NIRF 2018.php');
unlink('upload/'.$b['File_Name']);
}
else
{ ?>
<script type="text/javascript">
alert("Please insert suitable image");
</script>
<?php }
}
?>
<?php
include("header.php");
?>
<img src="upload/<?php echo $b['File_Name']; ?>" height="330px" width="1080px" style="margin-top:-25px;">
<table width="1080px"><tr>
<td colspan="3" align="center" bgcolor="#999999">
<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="click" value="submit">
</form>
</td>
</tr>
</table>
<?php include("mid1.php");
?>
<?php include("mid2.php");
?>
<table width="620px" style="padding-right:15; padding-left:15;">
<tr>
<td><a href="Tenders.php" target="_parent"><img src="images/tenders.jpg" width="100px"></a></td>
<td><a href="NEWS.php" target="_parent"><img src="images/news_ymcaust.jpg" width="100px"></a></td>
<td><a href="recruitment.php" target="_parent"><img src="images/recruitment.jpg" width="100px"></a></td>
<td><a href="photogallery.php" target="_parent"><img src="images/photo_gallery.jpg" width="100px"></a></td>
<td><a href="#"><img src="images/training_placement.jpg" width="100px"></a></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td colspan="4"><font size="5"><b>Home</b></font></td>
</tr>
<tr>
<td><a href="#" style="color:#666666;">Print</a> | <a href="#" style="color:#666666;">Email</a></td>
</tr>
<tr>
<td colspan="4"><font size="2">Click on relevant link for details:</font></td>
</tr>
<tr>
<td colspan="4"><a href="#" style="color:#666666;"><font size="2">NIRF 2018: Full Report</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#"  style="color:#006633;"><font size="2">Sustained number and name of company in last five years</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#"  style="color:#006633;"><font size="2">Consultancy Projects</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#"  style="color:#006633;"><font size="2">Placements</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#" style="color:#006633;"><font size="2">Sponsored Projects</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#" style="color:#006633;"><font size="2">Details of Top Institute/University from where Students admitted to our University for higher studies</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#" style="color:#006633;"><font size="2">Details of Top Institute/University where Our Students admitted for higher studies</font></a></td>
</tr>
<tr>
<td colspan="4"><a href="#" style="color:#006633;"><font size="2">Details of UG Students opted for Higher Studies</font></a></td>
</tr>
<tr>
<td colspan="5" width="620px"><hr></td>
</tr>
<tr>
<td colspan="5" align="center"><font size="2"><b><a href="#" style="color:#0033CC;"> Self Study Report(SSR) for NAAC Accreditation </a></b></font></td>
</tr>
<tr>
<td colspan="5" align="center"><font size="2"><b>Videos of NAAC Visit from 13 to 15 Oct. 2016:<a href="#" style="color:#0033CC;">Day 1</a> | <a href="#" style="color:#0033CC;">Day 2</a> | <a href="#" style="color:#0033CC;">Day 3</a></b></font></td>
</tr>
<tr>
<td colspan="5" align="center"><font size="2"><b><a href="#" style="color:#0033CC;">NAAC Accreditation Report</a></b></font></td>
</tr>
<tr>
<td colspan="5" width="620px" style="vertical-align:2px;"><hr><hr></td>
</tr>
<tr>
<td colspan="2" align="left"><font color="#666666" size="4"><b>Awarda and Approvals</b></font></td>
<td colspan="3" align="right"><font color="#666666" size="4"><b>Meet Old Buddies - The Alumni</b></font></td>
</tr>
<tr>
<td colspan="5" width="620px"><hr></td>
</tr>
<tr>
<td  colspan="2"align="justify">
<ul type="square"><font size="2">
<li>YMCA UST has been conferred “Best Upcoming University” award by Associated Chamber of Commerce and Industry of India in Feb., 2014 under National Education Excellence Awards 2014.</li>
<li>YMCA UST has also been awarded ‘AAA+’ by the Caree360 Magazine in the year 2013, 2014 & 2015.</li>
<li>DANFOSS India (P) Ltd. has given a award of Rs. 50000 to B.Tech. in May, 2014. Mechanical students for a project (Second best innovative project in India)</li>
<li>Appreciation award by DC Faridabad - in the field of life saving programme for Blood Donation during the year 2013, 2014 and 2015.</li>
</font></ul>
</td>
<td colspan="3" style="padding-left:10;"><img src="images/first_batch_1973_small.jpg" width="300px" height="175px"><br><font size="2">The Alumni association ''MOB'' (Meet Old Buddies) has always been a pillar of strength and building blocks of YMCAUST.<a href="#"> More...</a></font></td>
</tr>
</table>

<?php
include("footer.php");
?>