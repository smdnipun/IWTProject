<html>
    <head>
        <title>Order details</title>
        <link rel="stylesheet" type="text/css" href="../css/table.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">
        <script src="../js/notAvaliabale.js"> </script>
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
             
            
                  <a href="Shippingdetails.php" ><button>Shipping</button></a>
                  <br><br>
                  <a href="Deliverystaff.php" ><button>Staff</button></a>
                  <br><br>
 
                <button onclick="notAvailableAlert()">Sign out</button>
            </div>
        </div>
        
        <a href="deliveryhandling.html" ><button>Back</button></a>
        <center>
        <div class="main">
            <h1>Order details </h1>

		<table id="order" border=1 >
	
		<tr>
            <th>OID</th>
            <th>Item No</th>
            <th>Customer Name</th> 
            <th>Quantitty</th> 
            <th>Location</th> 
            <th>Order status</th> 
        </tr>
        <?php
            include "../php/config.php";

            $sql = "SELECT * FROM orderitem";
            $result = $conn->query($sql);
            while($row = mysqli_fetch_array($result)) {
                $findUser="SELECT * from customer where CID=(SELECT CID from orders where OID=".$row['OID'].")";
                $findUserResult = $conn->query($findUser);
                while($customer=mysqli_fetch_array($findUserResult)){
                    echo "<tr>
                        <td>".$row['OID']."</td>
                        <td>".$row['Item_number']."</td>
                        <td>".$customer['firstname']." ".$customer['lastname']."</td>
                        <td>".$row['Quantity']."</td>
                        <td>".$customer['City']."</td>
                        <td>    
                            <form action='../php/orderstatus.php' method='post'>
                                <input type='text' name='oid' size='2' value='".$row['OID']."' readonly='readonly' style='display:none;'>
                                <select name='Orderstatus'>
                                    <option value='shipped'>Shipped</option>
                                    <option value='cancelled'>Cancelled</option>
                                </select>
                                <button type='submit'>Update Status</button>
                            </form>
                        </td>
                    </tr>";
                }
            }
            $conn->close();
        ?>
        </table>
        <br><br>
        <h3>Delivery Staff</h3>
        <table border=1 >
            <tr>
                <td>Name</td>
                <td>Location</td>
                <td></td>
            </tr>
            <?php
                include "../php/config.php";

                $sql = "SELECT * FROM deliveryperson";
                $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                                <td>".$row['User_name']."</td>
                                <td>".$row['Location']."</td>
                                <td>
                                    <form action='../php/assignperson.php' method='post'>
                                        ID:-<input type='text' size='2' name='personid' value='".$row['DP_ID']."' readonly='readonly'><br>
                                        Order ID :- <input type='number' size='2' name='oid'><br>
                                        <button type='submit'>Assign Person</button><br>
                                    <form>
                                </td>
                            <tr>";
                    }
            ?>
        </table>
        </center>		
            </div>
        </div>
        <div class="bottomBar">
            <div style="text-align: center;justify-content: center;align-content: center;align-items: center;">
                <br><br>
                <a href="report.html">Report</a>&nbsp;|&nbsp;
                <a href="faq.html">FAQ</a>&nbsp;|&nbsp;
                <a href="contact.html">Contact Us</a>&nbsp;|&nbsp;
                <a href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;
                <a href="help.html">Help</a>&nbsp;|&nbsp;
                <a href="abput.html">About</a>
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