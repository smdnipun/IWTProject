<html>
    <head>
        <title>Delivery staff</title>
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
              
                <a href="Shipping details.html"><button>Shipping</button></a>
                <br><br>
                <a href="Order details.html" ><button>Order</button></a>
                <br><br>
                <button onclick="notAvailableAlert()">SignOut</button>
            </div>
        </div>
        <a href="deliveryhandling.html" ><button>Back</button></a>
        <center>
        <div class="main">
            <h1>Delivery staff</h1>
            <br>
          
			
		<table id="staff" border="1" >
				
	
		<tr>
            <th>ID No</th>
            <th>Name</th> 
            <th>Address</th> 
            <th>Vehical No.</th> 
        </tr>
        <?php
            include "../php/config.php";

            $sql = "SELECT * FROM deliveryperson";
            $result = $conn->query($sql);
            while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>".$row['DP_ID']."</td>
                            <td>".$row['User_name']."</td>
                            <td>".$row['Location']."</td>
                            <td>".$row['Vehical_No']."</td>";
                }
        ?>
			</table>		
            </div>
            </center>
        </div>
        <br><br><br>
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
                    <img src="../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                   
                </div>
            </div>
        </div>
    </body>
</html>