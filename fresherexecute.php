<?php 
session_start();
include('db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM fresher_user WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: fresherdetail.php?remarks=failed"); 
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
 $qualification=$_POST['qualification'];
 $course=$_POST['course'];
 $institute=$_POST['institute'];
 $certification=$_POST['certification'];
 $resume=$_POST['resume'];
 
 if(mysqli_query($con,"INSERT INTO fresher_user(fname, lname, d_o_b, gender, address, city, state, pincode, country, email, contact_no, whatsapp, jobtitle, location, relocate, jobtype, jobtime, qualification, course, institute, certification, resume)VALUES('$fname', '$lname', '$d_o_b', '$gender', '$address', '$city', '$state', '$pincode', '$country', '$email', $contact_no', '$whatsapp', '$jobtitle', '$location', '$relocate', '$jobtype', '$jobtime', '$qualification', '$course', '$institute', '$certification', '$resume')")){ 
 header("location: fresherdetail.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: fresherdetail.php?remarks=error&value=$e");  
 }
}
?>