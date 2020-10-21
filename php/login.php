<?php

    session_start();
    include "../php/config.php";

    $email = $_POST['email'];
    $pwd=$_POST['password'];


    $searchUser = "SELECT * FROM customer WHERE email='".$email."'";
    $searchUserResult = $conn->query($searchUser);
    if(mysqli_num_rows($searchUserResult)==1){
        while($row = mysqli_fetch_array($searchUserResult)) {
            if($row['Password']==$pwd){
                $_SESSION['username']=$row['firstname'];
                header('Location: ../html/home.php');
            }
            else{
                echo('Incorrect Credentials');
            }
        }
    }else{
        $searchStaff = "SELECT * FROM staff WHERE email='".$email."'";
        $searchStaffResult = $conn->query($searchStaff);
        while($row = mysqli_fetch_array($searchStaffResult)) {
            if($row['Password']==$pwd){
                if($row['Type']=='admin'){

                    $_SESSION['username']=$row['User_name'];
                    header('Location: ../html/adminpanel.php');
                }
                else if($row['Type']=='DeliveryM'){

                    $_SESSION['username']=$row['User_name'];
                    header('Location: ../html/deliveryhandling.html');
                }
                else if($row['Type']=='PaymentH'){

                    $_SESSION['username']=$row['User_name'];
                    header('Location: ../html/paymenthandling.html');
                }
                else{
                    echo "err";
                }
            }else{
                echo '<script>alert("Incorrect Credentials")</script>';
            }
        }
    }
    $conn->close();
?>


