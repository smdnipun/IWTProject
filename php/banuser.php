<?php
    
    include "../php/config.php";
    
    $sql = "DELETE FROM Staff WHERE staff_id='".$id."'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
    $conn->close();
?>


