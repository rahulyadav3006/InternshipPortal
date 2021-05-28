<?php 
session_start();
include('db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM experience_user WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: experiencedetail.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $d_o_b=$_POST['d_o_b'];
 $gender=$_POST['gender'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $pincode=$_POST['pincode'];
 $country=$_POST['country'];
 $email=$_POST['email'];
 $contact_no=$_POST['contact_no'];
 $whatsapp=$_POST['whatsapp'];
 $jobtitle=$_POST['jobtitle'];
 $location=$_POST['location'];
 $relocate=$_POST['relocate'];
 $jobtype=$_POST['jobtype'];
 $jobtime=$_POST['jobtime'];
 $experience=$_POST['experience'];
 $company=$_POST['company'];
 $ctc=$_POST['ctc'];
 $certification=$_POST['certification'];
 $resigned=$_POST['resigned'];
 $resume=$_POST['resume'];
 
 
 
 if(mysqli_query($con,"INSERT INTO experience_user(fname, lname, d_o_b, gender, address, city, state, pincode, country, email, contact_no, whatsapp, jobtitle, location, relocate, jobtype, jobtime, experience, company, ctc, certification, resigned, resume)VALUES('$fname', '$lname', '$d_o_b', '$gender', '$address', $city', '$state', '$pincode', '$country', '$email', '$contact_no', '$whatsapp', '$jobtitle', '$location', '$relocate', '$jobtype', '$jobtime', '$experience', '$company', '$ctc', '$certification', '$resigned', '$resume')")){ 
 header("location: experiencedetail.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: experiencedetail.php?remarks=error&value=$e");  
 }
}
?>