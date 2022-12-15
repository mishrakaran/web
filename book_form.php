<?php
$con= mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
}
else{
    echo"no connection";
}

mysqli_select_db($con,'electro_caps');
$user=$_POST['user'];
$email=$_POST['email'];
$moblie=$_POST['moblie'];
$Feedback=$_POST['Feedback'];
$q_score = $_POST['quality'];

$query="insert into userinfo(user,email,moblie,Feedback,quality_score)
values('$user','$email','$moblie','$Feedback','$q_score')";

mysqli_query($con,$query);

header('location:feedback.php');
?>



