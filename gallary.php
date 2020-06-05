<?php include("header.php");
include("mid2.php");
$aname=$_REQUEST['aname'];
$a=mysql_query("select PName from photomaster where AName='".$aname."'");
if(mysql_num_rows($a)>0)
{ ?>
<ul>
<table>
<tr><td><br /></td></tr>
<tr><td><font size="6" color="#000000"><b>Photo gallary-<?php echo $aname;?></b></font></td></tr></table>
<tr><td><br /></td></tr>
<?php while($b=mysql_fetch_array($a))
{ ?>
<li style="display:inline;"><table style="display:inline; margin-left:10px; margin-right:10px;"><tr><td width="130px" align="center"><a href="gallary/<?php echo $b['PName']; ?>"><img src="gallary/<?php echo $b['PName']; ?>" width="130px" height="120px"/></a></td></tr>
<tr><td align="center" bgcolor="#999999"><a href="gallary/<?php echo $b['PName']; ?>" style="text-decoration:none;"><font color="#000000">Download</font></a></td></tr></table></li>




<?php } ?>
</ul>
<?php }
else
{
echo "No Record found";
}
?>
<br />
<br />

<table width="598px" style="padding-right:15; padding-left:15; padding-top:15;" cellpadding="2">
<tr>
<td><hr></td>
</tr>

<tr>
<td align="center"><font size="2"><b><a href="#" style="color:#0033CC;"> Self Study Report(SSR) for NAAC Accreditation </a></b></font></td>
</tr>
<tr>
<td align="center"><font size="2"><b>Videos of NAAC Visit from 13 to 15 Oct. 2016:<a href="#" style="color:#0033CC;">Day 1</a> | <a href="#" style="color:#0033CC;">Day 2</a> | <a href="#" style="color:#0033CC;">Day 3</a></b></font></td>
</tr>
<tr>
<td align="center"><font size="2"><b><a href="#" style="color:#0033CC;">NAAC Accreditation Report</a></b></font></td>
</tr>
<tr>
<td><hr></td>
</tr>
</table>
<?php 

include("footer.php");
?>