<html>
    <head>
    <title>Shipping details</title>   
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">   
    <link rel="stylesheet" type="text/css" href="../css/button.css">    
    <link rel="stylesheet" href="../css/signedInUser.css">
    <link rel="stylesheet" href="../css/table.css">
  
</head>
    <body>
        <div class="topBar">
            <div style="padding-left: 20px;padding-top:30px;">
                <img src="../img/cart.png" height="100" width="100">
            </div>
            <div class="searchBar">
                <div></div>
                <div class="searchBarRow" style="text-align: center;align-items: center;">
                    <div style="text-align: center;">
                        <input style="height:40px;" type="text" size="150">
                    </div>
                    <div>
                        <button class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                    </div>
                </div>
            </div>
            <div style="align-items: center;align-content: center; text-align: center;padding-top: 35px;">
                
                <a href="Orderdetails.php" ><button>Order</button></a>
                <br><br>
                <a href="Deliverystaff.php" ><button>Staff</button></a>
                <br><br>
                <br>
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
            </div>
        </div>
        
        <a href="deliveryhandling.html" ><button>Back</button></a>
        <center>
        <div class="main">
            <h1>Shipping details</h1> 
            <input type="text" id="Shippingdetails" placeholder="Serach Order No. "> 
            <br><br>
			
			
		    <table id="Shipping" border=1 >
 	
		    <tr>
				<th>Order No</th>
				<th>Item No.</th> 
				<th>Quantitty</th> 
				<th>Delivery location</th> 
				<th>Delivery person </th> 
				<th>Vehical No.</th> 
            </tr>
            <?php

                include "../php/config.php";

                $sql = "SELECT * FROM orderitem";
                $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result)) {
                    $findUser="SELECT city from customer where CID=(SELECT CID from orders where OID=".$row['OID'].")";
                    $findUserResult = $conn->query($findUser);
                    while($city=mysqli_fetch_array($findUserResult)){
                        $findDeliveryDetails="SELECT * from assigneddelivery where OID=".$row['OID'];
                        $findDeliveryResults=$conn->query($findDeliveryDetails);
                        while($details=mysqli_fetch_array($findDeliveryResults)){
                            $findDeliveryPerson="SELECT * from deliveryperson where DP_ID=".$details['DP_ID'];
                            $findDeliveryPersonResult=$conn->query($findDeliveryPerson);
                            while($person=mysqli_fetch_array($findDeliveryPersonResult)){
                                echo "<tr>
                                    <td>".$row['OID']."</td>
                                    <td>".$row['Item_number']."</td>
                                    <td>".$row['Quantity']."</td>
                                    <td>".$city['city']."</td>
                                    <td>".$person['User_name']."</td>
                                    <td>".$person['Vehical_No']."</td>
                                </tr>";
                            }
                        }
                    }
                }
                $conn->close();
            ?>
			</table>		
             </center>   
        </div>
        <div class="bottomBar">
            <div style="text-align: center;justify-content: center;align-content: center;align-items: center;">
                <br><br>
               
                <a href="faq.html">FAQ</a>&nbsp;|&nbsp;
                <a href="contact.html">Contact Us</a>&nbsp;|&nbsp;
                <a href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;
                <a href="help.html">Help</a>&nbsp;|&nbsp;
                <a href="about.html">About</a>
                <div>
                    <br>
                    <img src="./../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="./../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="./../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                   
                </div>
            </div>
        </div>
    </body>
</html>