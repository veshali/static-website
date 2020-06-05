<?php
if(isset($_REQUEST['submit']))
{
$com=mysql_connect("localhost","root","");
if(!$com)
{
die('could not connect:'.mysql_error());
}
mysql_select_db('veshali',$com);

$aname=$_REQUEST['aname'];
$day=$_REQUEST['day'];
$mon=$_REQUEST['mon'];
$year=$_REQUEST['year'];
$date=$day."/".$mon."/".$year;
$gen=$_REQUEST['gender'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$phno=$_REQUEST['phno'];
$telno=$_REQUEST['telno'];
$email=$_REQUEST['email'];
$atype=$_REQUEST['atype'];
$anum=$_REQUEST['anum'];
$selectres=$_REQUEST['selectres'];
$category=$_REQUEST['category'];
$subcategory=$_REQUEST['subcategory'];
$condition=$_REQUEST['condition'];
$eligibility=$_REQUEST['eligibility'];
$area=$_REQUEST['area'];
$address=$_REQUEST['address'];
$block=$_REQUEST['block'];
$selectdis=$_REQUEST['selectdis'];
$code=$_REQUEST['code'];
$board=$_REQUEST['board'];
$rollno=$_REQUEST['rollno'];
$exam=$_REQUEST['exam'];
$exampassed=$_REQUEST['exampassed'];
$yearofpassing=$_REQUEST['yearofpassing'];
$typeofinst=$_REQUEST['typeofinst'];
$areaofinst=$_REQUEST['areaofinst'];
$password=$_REQUEST['password'];
$reenter=$_REQUEST['reenter'];
$ques=$_REQUEST['ques'];
$ans=$_REQUEST['ans'];
$center=$_REQUEST['center'];
mysql_query("insert into veshali(aname,DOB,gender,fname,mname,phno,telno,email,aadhar_type,aadhar_num,residence,category,subcategory,handicapped,Eligibility,area,contact_address,block,district,pincode,board,Rollno,exam,exam_passed,year_of_inst,type_of_inst,area_of_inst,password,re_enter,S_ques,S_ans,center) values('".$aname."','".$date."','".$gen."','".$fname."','".$mname."','".$phno."','".$telno."','".$email."','".$atype."','".$anum."','".$selectres."','".$category."','".$subcategory."','".$condition."','".$eligibility."','".$area."','".$address."','".$block."','".$selectdis."','".$code."','".$board."','".$rollno."','".$exam."','".$exampassed."','".$yearofpassing."','".$typeofinst."','".$areaofinst."','".$password."','".$reenter."','".$ques."','".$ans."','".$center."')");?>
<script type="text/javascript">
alert("Data saved successfully");
</script>
<?php
mysql_close($com);
}
?>
<html>
<head>
<title>part3</title>
<script type="text/javascript">
function error()
{
var name=document.getElementById("name").value;
if(name.length==0)
{
alert("Please enter applicant name");
document.getElementById("name").focus();
return false;
}
if(document.getElementById("fname").value=="")
{
alert("Please enter father name");
document.getElementById("fname").focus();
return false;
}
if(document.getElementById("mname").value=="")
{
alert("Please enter mother name");
document.getElementById("mname").focus();
return false;
}
if(document.getElementById("phno").value=="")
{
alert("Please enter your phone number");
document.getElementById("phno").focus();
return false;
}
if(document.getElementById("telno").value=="")
{
alert("Please enter telephone number");
document.getElementById("telno").focus();
return false;
}
if(document.getElementById("email").value=="")
{
alert("Please enter your email address");
document.getElementById("email").focus();
return false;
}
if(document.getElementById("aadharno").value=="")
{
alert("Please enter your Aadhar number");
document.getElementById("aadharno").focus();
return false;
}
if(document.getElementById("contact").value=="")
{
alert("Please enter your contact address");
document.getElementById("contact").focus();
return false;
}
if(document.getElementById("area").value=="")
{
alert("Please enter block/town");
document.getElementById("area").focus();
return false;
}
if(document.getElementById("code").value=="")
{
alert("Please enter pin code");
document.getElementById("code").focus();
return false;
}
if(document.getElementById("rollno").value=="")
{
alert("Please enter your Roll number");
document.getElementById("rollno").focus();
return false;
}
if(document.getElementById("password").value=="")
{
alert("Please enter your password");
document.getElementById("password").focus();
return false;
}
if(document.getElementById("reenter").value=="")
{
alert("Please re-enter your password");
document.getElementById("reenter").focus();
return false;
}
if(document.getElementById("ans").value=="")
{
alert("Please enter security answer");
document.getElementById("ans").focus();
return false;
}
if(document.getElementById("center").value=="")
{
alert("Please enter your designated center");
document.getElementById("center").focus();
return false;
}

var ph=document.getElementById("phno").value;
if(ph.length!=10)
{
alert("Enter valid mobile no.");
document.getElementById("phno").value="";
document.getElementById("phno").focus();
return false;
}


var r=/[a-z A-Z 0-9]+[@]+[a-z A-Z 0-9]+[.]+[a-z A-z 0-9]/;
if(r.test(document.getElementById("email").value)==false)
{
alert("Please enter a valid email address");
document.getElementById("email").value="";
document.getElementById("email").focus();
return false;
}

var ps=document.getElementById("password").value;
if(ps.length!=10)
{
alert("Enter a valid password");
document.getElementById("password").value="";
document.getElementById("password").focus();
return false;
}

var pas=document.getElementById("reenter").value;
if(pas.length!=10)
{
alert("Enter a valid password");
document.getElementById("reenter").value="";
document.getElementById("reenter").focus();
return false;
}

}

function isalpha(that)
{
var r=/[^a-z A-Z .]/;
if(r.test(that.value))
{
alert("Please enter a valid name");
that.value="";
that.focus();
return false;
}
}

function isnum(num)
{
if(isNaN(num.value))
{
alert("Please enter valid no.");
num.value="";
num.focus();
return false;
}
}

</script>
</head>
<body leftmargin="200px">
<p align="center"><font size="5"><b>YMCA UNIVERSITY OF SCIENCE AND TECHNOLOGY,FARIDABAD</b></font><br>
<font size="4"><b>(UNIVERSIY OF TECHNICAL EDUCATION)</b></font><br>
<font size="4"><b>GOVERNMENT OF HARYANA</b></font></p>
<br>
<p align="center"><font size="5">Registration step 2 of 5(Entries marked with * are compulsory)</font></p>
<p align="center"><font size="5">Course applying for Engg.</font></p>
<form method="post">
<table cellspacing="20" style="outline:solid" width="100%" bgcolor="#DDDBD9">
<tr>
<td colspan="4"><b><font size="5">--------------------------------------------Personal Details------------------------------------------------</font></b></td>
</tr>
<td><label>Applicant Name</label></td>
<td colspan="3"><input type="text" size="40" id="name" name="aname" onKeyUp="return isalpha(this);"></td>
</tr>
<tr>
<td><label>Date Of Birth</label></td>
<td colspan="3">
<select name="day">
<option>Day</option>
<?php
for($i=1;$i<=31;$i++)
{
echo "<option>".$i."</option>";
}
?>
</select>
<select name="mon"> 
<option value="0">Month</option>
<?php
for($i=1;$i<=12;$i++)
{ ?>

<option><?php echo $i; ?></option>

<?php }
?></select>
<select name="year">
<option value="0">Year</option>
<?php
for($i=1970;$i<=2020;$i++)
{ ?>

<option><?php echo $i; ?></option>

<?php }
?>
</select>
</td>
<tr>
<td><label>Gender:</label></td>
<td colspan="3"><input type="radio" name="gender" value="Male" checked>Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td><label>Father Name</label></td>
<td colspan="3"><input type="text" size="40" name="fname" id="fname" onKeyUp="return isalpha(this);"></td>
</tr>
<tr>
<td><label>Mother Name</label></td>
<td colspan="3"><input type="text" size="40" id="mname" name="mname" onKeyUp="return isalpha(this);"></td>
</tr>
<tr>
<td><label>Mobile No.</label></td>
<td colspan="3"><input type="text" size="40" id="phno" name="phno" onKeyUp="return isnum(this);" title="Mobile no. should be 10 digit only" ></td>
</tr>
<tr>
<td><label>Telephone No.</label></td>
<td colspan="3"><input type="text" size="40" name="telno" id="telno" onKeyUp="return isnum(this);"></td>
</tr>
<tr>
<td><label>Email address</label></td>
<td colspan="3"><input type="text" size="40" id="email" name="email" title="Email address should contain A-Z,a-z,0-9,@,$,# ans should be of 32 characters" ></td>
</tr>
<tr>
<td><label>Aadhar type</label></td>
<td colspan="3"><input type="radio" name="atype" value="Aadhar number" checked>Aadhar number
<input type="radio" name="atype" value="Aadhar Enrolment ID">Aadhar Enrolment ID</td>
</tr>
<tr>
<td><label>Aadhar Number.</label></td>
<td colspan="3"><input type="text" size="40" id="aadharno"  name="anum" onKeyUp="return isnum(this);"></td>
</tr>
</table>
<br>


<table cellspacing="18" style="outline:solid" bgcolor="#DDDBD9">
<tr>
<td colspan="4"><b><font size="5">--------------------------------------------Category Details------------------------------------------------</font></b></td>
</tr>
<tr>
<td><label>Do you belong to Haryana Resident category*</label></td>
<td>
<select name="selectres">
<option value="0">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</td>
</tr>

<tr>
<td><label>Select Category*</label></td>
<td>
<select name="category">
<option value="0">select</option>
<option value="Haryana General">Haryana General</option>
<option value="Scheduled caste of Haryana">Scheduled caste of Haryana</option>
<option value="Backward class A of Haryana">Backward class A of Haryana</option>
<option value="Backward class B of Haryana">Backward class B of Haryana</option>
</select>
</td>
</tr>

<tr>
<td><label>Select Sub Category*</label></td>
<td>
<select name="subcategory">
<option value="0">select</option>
<option value="Open">Open</option>
<option value="Ex Service man of Haryana">Ex Service man of Haryana</option>
<option value="Freedom Fighter of Haryana">Freedom Fighter of Haryana</option>
</select>
</td>
</tr>

<tr>
<td><label>Are you physically handicapped?</label></td>
<td colspan="3"><input type="radio" name="condition" value="Yes" checked>Yes
<input type="radio" name="condition" value="No">No</td>
</tr>

<tr>
<td><label>If you are eligible ans want to apply simultaneously for the category(s),select whichever is applicable</label></td>
<td >
<input type="checkbox" name="eligibility" value="Haryana Govt School Topper" checked>Haryana Govt School Topper<br>
<input type="checkbox" name="eligibility" value="kashmiri Migrant">kashmiri Migrant<br>
<input type="checkbox" name="eligibility" value="Mewat area resident">Mewat area resident<br>
<input type="checkbox" name="eligibility" value="Shivalik Development board area">Shivalik Development board area<br>
<input type="checkbox"name="eligibility" value="Tution Fee Wavier">Tution Fee Wavier<br>
</td>
</tr>
</table>
<br>

<table cellspacing="20" style="outline:solid" width="100%" bgcolor="#DDDBD9">
<tr>
<td colspan="4"><b><font size="5">--------------------------------------------Contact Address------------------------------------------------</font></b></td>
</tr>

<tr>
<td><label>Area to which you belong*</label></td>
<td colspan="3">
<input type="radio" name="area" value="rural" checked>Rural area
<input type="radio" name="area" value="urban">Urban area
</td>
</tr>

<tr>
<td><label>Contact Address*</label></td>
<td><textarea name="address" rows="3" cols="30" id="contact"></textarea></td>
</tr>

<tr>
<td><label>Block/Town*</label></td>
<td><input type="text" size="30" id="area" name="block" onKeyUp="return isalpha(this);"></input></td>
</tr>

<tr>
<td><label>Select District*</label></td>
<td>
<select name="selectdis">
<option value="0">Select</option>
<option value="Ambala">Ambala</option>
<option value="Karnal">Karnal</option>
<option value="Yamunanagar">Yamunanagar</option>
<option value="Kurukshetra">Kurukshetra</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Delhi">Delhi</option>
<option value="sonept">sonept</option>
<option value="Sirsa">Sirsa</option>
<option value="Rohtak">Rohtak</option>
<option value="Jind">Jind</option>
<option value="Panchkula">Panchkula</option>
<option value="Rewari">Rewari</option>
<option value="Hisar">Hisar</option>
<option value="Faridabad">Faridabad</option>
<option value="Fatehabad">Fatehabad</option>
<option value="Gurgao">Gurgao</option>
<option value="Bhiwani">Bhiwani</option>
<option value="Palwal">Palwal</option>
<option value="Charkhi dadri">Charkhi dadri</option>
</select>
</td>
</tr>

<tr>
<td><label>Pin Code*</label></td>
<td><input type="text" size="30" name="code" id="code" onKeyUp="return isnum(this);"></input></td>
</tr>

</table>
<br>
<table cellspacing="20" style="outline:solid" bgcolor="#DDDBD9">
<tr>
<td colspan="4"><b><font size="5">--------------------------------------------Education Details------------------------------------------------</font></b></td>
</tr>
<tr>
<td><label>Board*</label></td>
<td>
<select name="board">
<option value="board">select</option>
<option value="Haryana board">Haryana board</option>
<option value="C.B.S.E board">C.B.S.E board</option>
<option value="Bihar board">Bihar board</option>
</select>
</td>
</tr>

<tr>
<td><label>Roll No.*</label></td>
<td><input type="text" size="30" name="rollno" id="rollno" onKeyUp="return isnum(this);"></input></td>
</tr>

<tr>
<td><label>Qualifying Examination*</label></td>
<td>
<select name="exam">
<option vaule="select">select</option>
<option vaule="matrix">Matrix with at least 35% marks and compulsory pass in maths and science subjects of qualifying examination</option>
</select>
</td>
</tr>

<tr>
<td><label>Qualifying Examination Passed*</label></td>
<td>
<select name="exampassed">
<option vaule="select">select</option>
<option vaule="passed">Passed</option>
</select>
</td>
</tr>

<tr>
<td><label>Year Of Passing*</label></td>
<td>
<select name="yearofpassing">
<option value="0">Year</option>
<?php
for($i=1970;$i<=2020;$i++)
{ ?>

<option><?php echo $i; ?></option>

<?php }
?>
</select>
</td>
</tr>

<tr>
<td><label>Type Of Institute of Your Qualifying Examination*</label></td>
<td colspan="3">
<input type="radio" name="typeofinst" value="govt" checked>Govt.
<input type="radio" name="typeofinst" value="Govt.Aided">Govt.Aided
<input type="radio" name="typeofinst" value="Private">Private
</td>
</tr>

<tr>
<td><label>Location Of Institute of Your Qualifying Examination*</label></td>
<td colspan="3">
<input type="radio" name="areaofinst" value="Rural" checked>Rural area
<input type="radio" name="areaofinst" value="Urban">Urban area
</td>
</tr>
</table>
<br>

<table cellspacing="20" style="outline:solid" width="100%" bgcolor="#DDDBD9">
<tr>
<td colspan="4"><b><font size="5">--------------------------------------------Authentication Details----------------------------------------</font></b></td>
</tr>
<tr>
<td width="25%"><label>Enter your password*</label></td>
<td width="75%"><input type="password" size="30" id="password" name="password"></td>
</tr>


<tr>
<td><label>Re-Enter your password*</label></td>
<td><input type="password" name="reenter" size="30" id="reenter"></td>
</tr>

<tr>
<td><label>Security Question*</label></td>
<td colspan="3">
<select name="ques">
<option value="select Question">Select</option>
<option value="What is your pet name?">What is your pet name?</option>
<option value="What is your grandfather name?">What is your grandfather name?</option>
<option value="What is your mother name?">What is your mother name?</option>
</select>
</td>
</tr>

<tr>
<td><label>Security Answer*</label></td>
<td><input type="text" size="30" id="ans" name="ans"></td>
</tr>

</table>
<br>

<table cellspacing="10"  style="outline:solid" bgcolor="#DDDBD9">
<tr>
<td colspan="4"><b><font size="4">Designated center where you want to be report for verification & confirmation of details filled in online application form</font></b></td>
</tr
><tr>
<td><label>Select Designated Center*</label></td>
<td><input type="text" size="30" id="center" name="center" onKeyUp="return isalpha(this);"></td>
</tr>

<tr>
<td colspan="4">Candidate must report at the designated center from 08-05-2018 to 15-06-2018 as Inter-se-merit/Rank of only those candidates will be prepared who will get their application forms verified & confirmed from the selected designated center.</td>
</tr>

</table>
<br>
<center><input type="submit" name="submit" value="Save Details" onClick="return error();"></center>
</form>
</body>
</html>



