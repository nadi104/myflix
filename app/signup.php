
<?php

    
//session_start();
    include 'func.php';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if(!empty($email) || !empty($pwd)){
        //deleteUser($email);

    // updateUser($fname,$email);

        insertSignup($email,$pwd,'active');
    
        echo '<script>window.location="index.html";</script>';
    
    }

?>

