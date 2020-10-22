<?php

    session_start();
    include "../php/config.php";

    $id=$_SESSION['SID'];
    $pname = $_POST['pname'];
    $description =$_POST['desc'];
    $price = $_POST['pr'];
    $quantity = $_POST['quantity'];
    $unitprice = $_POST['unitprice'];
    $discount = $_POST['discount'];
    $category = $_POST['category'];

    
    $sql = "INSERT INTO item (Item_number,SID,Item_Name,Description,Quantity,Unit_Price,Discount,Category) 
    VALUES ('','$id','$pname','$description',$quantity,'$unitprice','$discount','$category')";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Added")</script>'; 
        header('Location: ../html/seller.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>