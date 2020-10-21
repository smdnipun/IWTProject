<?php

    include "../php/config.php";

    $email = $_POST['email'];
    $pwd=$_POST['password'];


    $sql = "SELECT * FROM customer WHERE email='".$email."'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
        if($row['Password']==$pwd){
            session_start();
            $_SESSION['username']=$row['firstname'];
            header('Location: ../html/home.php');
            // if($row['Type']=='admin'){
            //     session_start();
            //     $_SESSION['username']=$row['User_name'];
            //     header('Location: ../html/adminpanel.html');
            // }
            // if($row['Type']=='Seller'){
            //     header('Location: ../html/seller.html');
            // }
        }
        else{
            echo('Incorrect Credentials');
        }
    }
    $conn->close();
?>


