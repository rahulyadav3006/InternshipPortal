<?php 
session_start();
include('db.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM user_contact_details WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: index.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirm_password=$_POST['confirm_password'];
 $d_o_b=$_POST['d_o_b'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $contact_no=$_POST['contact_no'];
 $usertype=$_POST['user_type'];
 
 if(mysqli_query($con,"INSERT INTO user_contact_details(fname, lname, username, password, confirm_password, d_o_b, gender, email, contact_no, usertype)VALUES('$fname', '$lname', '$username', '$password', '$confirm_password', '$d_o_b', '$gender', '$email', '$contact_no', '$usertype')")){ 
 header("location: index.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: index.php?remarks=error&value=$e");  
 }
}
?>