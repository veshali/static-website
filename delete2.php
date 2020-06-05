<?php
include("connect.php");
$aname=$_REQUEST['aname'];
mysql_query("delete from albummaster where AName='".$aname."'");
$a=mysql_query("select * from photomaster where AName='".$aname."'");
while($b=mysql_fetch_array($a))
{
unlink('gallary/'.$b['PName']);
mysql_query("delete from photomaster where PName='".$b['PName']."'");
}


$row=mysql_query("select * from albummaster order by Id");
$i=1;
while($row1=mysql_fetch_array($row))
{
mysql_query("update albummaster set Id='".$i."' where Id='".$row1[0]."'");
$i=$i+1;
}



header('location:adminalbum.php');
?>