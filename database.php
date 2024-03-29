<?php 
$con=new mysqli("localhost","sox","sox","sox");

$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$sql="INSERT INTO users(usermame, password, gender, email) VALUES('$username','$gender', '$password', '$email')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}
?>