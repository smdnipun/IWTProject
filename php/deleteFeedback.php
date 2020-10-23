<?php

    include "../php/config.php";

    $fid=$_POST['fid'];
    
    $sql = "DELETE FROM feedback WHERE FID=".$fid."";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Added")</script>'; 
        header('Location: ../html/customeraccount.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
?>