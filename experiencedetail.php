<!-- Main menu (tabs) -->
     

<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>Experience Employee page</title>
</head>
<body>
<header>
 <nav>
    <ul>
        <li><a href="home.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="fresherdetail.php">Fresher Job<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="experiencedetail.php">Experience Job<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="internsippage.php">Internship Comapny<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="jobbylocation.php">Job by location<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="contactUs.php">Contact Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
    </ul>
 </nav>
</header>
<div id="center">
<div id="center-set"> 
<div id="signup">
<div id="signup-st">
<div align="center">

<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Experience User</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Submit Successfully</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Submission Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Submission Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<form name="reg" action="experienceexecute.php" onsubmit="return validateForm()" method="post" id="reg">
    <table>
        <td>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">First&nbsp;Name:</div>
</td>
<td width="171">
<input type="text" name="fname" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Last&nbsp;Name:</div></td>
<td><input type="text" name="lname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">D&nbsp;O&nbsp;B:</div></td>
<td><input type="date" id="tb-box" name="d_o_b" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Gender:</div></td>
<td><input type="text" id="tb-box" name="gender" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Address:</div></td>
<td><input type="text" id="tb-box" name="address" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">City:</div></td>
<td><input type="text" id="tb-box" name="city" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">State:</div></td>
<td><input type="text" id="tb-box" name="state" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Pincode:</div></td>
<td><input type="text" id="tb-box" name="pincode" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Country:</div></td>
<td><input type="text" id="tb-box" name="country" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email&nbsp;Id:</div></td>
<td><input type="email" id="tb-box" name="email" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Contact&nbsp;no:</div></td>
<td><input type="text" id="tb-box" name="contact_no" /></td>
</tr>
<td class="t-1"><div align="left" id="tb-name">WhatsApp&nbsp;no:</div></td>
<td><input type="text" id="tb-box" name="whatsapp" /></td>
</tr>
</table>
     </td>

 <td>
<table border="0" align="right" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">Job&nbsp;Title:</div>
</td>
<td width="171">
<input type="text" name="jobtitle" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Location:</div></td>
<td><input type="text" name="location" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">relocate:</div></td>
<td><input type="text" id="tb-box" name="relocate" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job Type:</div></td>
<td><input type="text" id="tb-box" name="jobtype" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job Time:</div></td>
<td><input type="Time" id="tb-box" name="jobtime" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Experience:</div></td>
<td><input type="text" id="tb-box" name="experience" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Company:</div></td>
<td><input type="text" id="tb-box" name="company" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Annual CTC:</div></td>
<td><input type="number" id="tb-box" name="ctc" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Certification:</div></td>
<td><input type="text" id="tb-box" name="certification" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Resigned/Working:</div></td>
<td><input type="text" id="tb-box" name="resigned" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Resume:</div></td>
<td><input type="file" id="tb-box" name="resume" /></td>
</tr>
</table>
</td>
   </table>

<div id="st"><input name="submit" type="submit" value="Submit" id="st-btn"/></div>
</form>

</div>
</div>
</div>
</div>
<div id="footer">
    <div id="tabs" class="footer">

                      <ul class="box">
                
            </ul>
     </div>

</div>
</body>
</html>