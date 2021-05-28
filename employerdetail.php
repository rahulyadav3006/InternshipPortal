<!-- Main menu (tabs) -->
     

<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>Employer Page</title>
</head>
<body>
<header>
  
 <nav>
    <ul>
        <li><a href="home.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="employerdetail.php">Employer<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="jobbylocation.php">Job by location<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="contactUs.php">Contact Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
              <a href="logout.php" id="st-btn">Sign Out</a>
              <a href="deleteac.php" id="st-btn">Delete Account</a></ul>


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
echo ' <div id="reg-head" class="headrg">Fill Employer Details</div> ';
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
<form name="reg" action="employerexecute.php" onsubmit="return validateForm()" method="post" id="reg">
    <table>
        <td>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">First&nbsp;Name:</div>
</td>
<td width="121">
<input type="text" name="fname" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Last&nbsp;Name:</div></td>
<td><input type="text" name="lname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Company&nbsp;Name:</div></td>
<td><input type="text" name="cname" id="tb-box"/></td>
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
<td width="121">
<input type="text" name="jobtitle" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Description:</div></td>
<td><input type="text" name="jobdescription" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Category:</div></td>
<td><input type="text" id="tb-box" name="jobcategory" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Location:</div></td>
<td><input type="text" id="tb-box" name="joblocation" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Type:</div></td>
<td><input type="text" id="tb-box" name="jobtype" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;salary:</div></td>
<td><input type="text" id="tb-box" name="jobsalary" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Posting&nbsp;Date:</div></td>
<td><input type="datetime-local" id="tb-box" name="postingdate" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Closing&nbsp;Date:</div></td>
<td><input type="datetime-local" id="tb-box" name="closingdate" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Number&nbsp;of&nbsp;Vaccancy:</div></td>
<td><input type="text" id="tb-box" name="vaccancy" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Job&nbsp;Status:</div></td>
<td><input type="text" id="tb-box" name="jobstatus" /></td>
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