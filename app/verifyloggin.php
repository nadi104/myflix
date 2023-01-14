<?php
session_start();
include 'func.php';
echo $_POST['email'];
$email = $_POST['email'];
$pwd = $_POST['password'];

$var = searchUser($email,$pwd);

$usr_email = $var[0]['user_email'];
$usr_pwd = $var[0]['user_pwd'];
echo $usr_email ." ".$usr_pwd;
if(!empty($usr_email) && !empty($usr_pwd)){
    
    $_SESSION['username'] = $usr_email;
    $_SESSION['pwd'] = $usr_pwd ;
    echo 'Login Success!';
    echo '<script>window.location="streaming.php";</script>';
}else{
    echo 'Wrong User Name Or Password';
}
?>