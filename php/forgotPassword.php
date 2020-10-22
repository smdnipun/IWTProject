<?php

    include "../php/config.php";

    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $telno= $_POST['telno'];

    $sql = "SELECT * FROM customer WHERE email='$email' and NIC='$nic' and phonenumber='$telno'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['email']=$email;
        header('Location: ../html/forgot_password2.html');
    }
    else{
        echo "<script>alert('Incorrect Details');</script>" ;
    }
    $conn->close();
?>
