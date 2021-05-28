<?php 
session_start();
include('db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM employer_detail WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: employerdetail.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $cname=$_POST['cname'];
 $d_o_b=$_POST['d_o_b'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $contact_no=$_POST['contact_no'];
 $whatsapp=$_POST['whatsapp'];
 $jobtitle=$_POST['jobtitle'];
 $jobdescription=$_POST['jobdescription'];
 $jobcategory=$_POST['jobcategory'];
 $joblocation=$_POST['joblocation'];
 $jobtype=$_POST['jobtype'];
 $jobsalary=$_POST['jobsalary'];
 $postingdate=$_POST['postingdate'];
 $closingdate=$_POST['closingdate'];
 $vaccancy=$_POST['vaccancy'];
 $jobstatus=$_POST['jobstatus'];
 
 
 if(mysqli_query($con,"INSERT INTO employer_detail(fname, lname, cname, d_o_b, gender, email, contact_no, whatsapp, jobtitle, jobdescription, jobcategory, joblocation, jobtype, jobsalary, postingdate, closingdate, vaccancy, jobstatus)VALUES('$fname', '$lname', '$cname', '$d_o_b', '$gender', '$email', $contact_no', '$whatsapp', '$jobtitle', '$jobdescription', '$jobcategory', '$joblocation', '$jobtype', '$jobsalary', '$postingdate', '$closingdate', '$vaccancy', '$jobstatus')")){ 
 header("location: employerdetail.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: employerdetail.php?remarks=error&value=$e");  
 }
}
?>