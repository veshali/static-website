<?php include("header.php");
include("mid2.php");
$a=mysql_query("select AName from albummaster");
if(mysql_num_rows($a)>0)
{ ?>
<table>
<tr><td><br /></td></tr>
<tr><td align="right"><font size="8"><b>Photo gallary YMCAUST</b></font></td></tr>
<tr>
<td><br></td>
</tr>
</table>
<ul><?php while($b=mysql_fetch_array($a))
{
$c=mysql_query("select min(Id) from photomaster where AName='".$b['AName']."'");
$d=mysql_result($c,0);
$e=mysql_query("select PName from photomaster where Id='".$d."'");
$f=mysql_result($e,0);
?>
<li  style="display:inline;"><table style="display:inline; margin-left:10px; margin-right:10px;"><tr><td width="130px" align="center"><a href="gallary.php?aname=<?php echo $b['AName'];?>"><img src="gallary/<?php echo $f;?>" width="115px" height="115px" style="border-style:ridge; border-color:#CCCCCC;"></a></td></tr><tr><td align="center" width="130px" bgcolor="#CCCCCC"><a href="gallary.php?aname=<?php echo $b['AName'];?>" style="text-decoration:none;"><font size="2" color="#000000"><b><?php echo $b['AName'];?></b></font></a></td></tr></table></li>
<?php } ?>
</ul>


<?php }
else
{
echo "No record found";
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