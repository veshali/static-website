<?php
include("connect.php");
$id=$_REQUEST['id'];
$a=mysql_query("Select * from photomaster where Id='".$id."'");
$b=mysql_fetch_array($a);
unlink('gallary/'.$b['PName']);
mysql_query("delete from photomaster where Id='".$id."'");
header('location:adminphoto.php?aname='.$b['AName']);
?>