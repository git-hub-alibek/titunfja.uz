<?php
session_start();
echo $_SESSION['login']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    if(!empty($email) && !empty($password)){
        $con=new mysqli('localhost','root','','carousel');
    $con->query("INSERT INTO registraciya (email,password) VALUES('$email','$password')");
    }
    ?>
</body>
</html>