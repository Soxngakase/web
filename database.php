<?php 
$con=new mysqli("192.168.254.109","root","root","newdb");
$name=$_POST['name'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];
$username=$_POST['username'];
$sql="INSERT INTO namegender(name,gender,password, confirmpass, username) VALUES('$name','$gender', '$password', '$confirmpass', '$username')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}
?>