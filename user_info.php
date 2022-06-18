<?php



$con=mysqli_connect('localhost','root');
if($con){
    //echo "connect successfully";
}else{
    //echo "not connected";
}

mysqli_select_db($con, 'ranaproject');
$u_name= $_POST['u_name'];
$u_email= $_POST['u_email'];
$u_mobile= $_POST['u_mobile'];
$u_city= $_POST['u_city'];
$u_comments= $_POST['u_comments'];

$query = "Insert Into user_info(u_name,u_email, u_mobile, u_city, u_comments) Values ('$u_name','$u_email','$u_mobile','$u_city','$u_comments')";
//echo "$query";
//mysqli_query($con,$query);
(mysqli_query($con, $query));
   header('location:index.php');


?>