<?php

    include "../php/config.php";
    
    session_start();
    
    $email = $_SESSION['email'];
    $pw=$_POST['newpwd'];
    $action=$_POST['action'];

    if($action=="delete"){
      $sql = "DELETE FROM customer WHERE email='$email'";
    }
    else if($action=="update"){
      $checkForSeller = "SELECT * FROM seller where email='$email'";
      $checkForSellerResult = $conn->query($checkForSeller);
  
      $checkForCustomer = "SELECT * FROM customer where email='$email'";
      $checkForCustomerResult = $conn->query($checkForCustomer);
  
      if(mysqli_num_rows($checkForSellerResult)==1){
          $sql = "UPDATE seller SET password='$pw' WHERE email='$email'";
      }
      else if(mysqli_num_rows($checkForCustomerResult)==1){
          $sql = "UPDATE customer SET password='$pw' WHERE email='$email'";
      }
  
      $result = $conn->query($sql);
  
      if ($conn->query($sql) === TRUE) {
          echo '<script>alert("Updated")</script>'; 
          header('Location: ../html/customeraccount.php');
        } else {
          echo "Error updating record: " . $conn->error;
        }
      $conn->close();
    }
?>


