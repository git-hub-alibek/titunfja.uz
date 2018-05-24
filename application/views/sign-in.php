<?php
session_start();
$email=$_POST['email'];
$password=md5($_POST['password']);
$con=new mysqli('localhost','root','','carousel');
$result=$con->query("SELECT * FROM registraciya WHERE email='$email' AND password='$password'");
if($result->num_rows>0 || $_SESSION['kirdi']==1){
    $_SESSION['kirdi']=1;
    header('location: http://titunfja.uz');

}
?>