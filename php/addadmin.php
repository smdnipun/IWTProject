<?php
    include "../php/config.php";

    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pw=$_POST['pwd'];
    
    $sql = "INSERT INTO staff (Staff_ID,User_name,NIC,Email,Phone_number,Password,Type) VALUES ('','$fname $lname','$nic','$email',$number,'$pw','admin')";
    $result = $conn->query($sql);
    echo $conn->error;
    $conn->close();
?>