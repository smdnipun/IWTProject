<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    session_start();    

    $conn = new mysqli($servername, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fname=$_SESSION['Regfname'];
    $lname=$_SESSION['Reglname'];
    $nic=$_SESSION['Regnic'];
    $email=$_SESSION['Regemail'];
    $phone=$_SESSION['Regnumber'];
    $pw=$_SESSION['Regpw'];
    $bname=$_POST['bname'];
    $bemail=$_POST['bemail'];
    $bankName=$_POST['bankName'];
    $branch=$_POST['branch'];
    $accountNumber=$_POST['accNo'];


    $sql = "INSERT INTO seller (SID,FullName,NIC,Email,Password,Phonenumber,Business_name,B_Email,Bank,Branch,AccountNo) 
    VALUES ('','$fname $lname','$nic','$email','$pw','$phone','$bname','$bemail','$bankName','$branch','$accountNumber')";

    $result = $conn->query($sql);
    echo $conn->error;
    $conn->close();
?>