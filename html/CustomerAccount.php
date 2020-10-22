<!DOCTYPE html> 
<html>
    <?php
        session_start();
    ?>
    <head>
        <title>Customer Account</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">   
        <link rel="stylesheet" type="text/css" href="../css/customer.css">      
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
        <div class="topBar">
            <div class="logo">
                <img src="../img/cart.png" height="100" width="100">
            </div>
            <div class="searchBar">
                <div></div>
                <div class="searchBarRow">
                    <div style="text-align: center;">
                        <input style="height:40px;" type="text" size="150">
                    </div>
                    <div>
                        <button class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                    </div>
                </div>
            </div>
            <div class="welcome">
                <span style="font-weight: bolder;font-size: 20px;">Welcome Back,</span><br>
                <span id="username">[username]</span><br><br>
                <button>My Account</button>&nbsp;&nbsp;
                <button>SignOut</button>
            </div>
        </div>
        <div class="main">
            <div class="covermain">
                <img src="../img/cover2.jpg" class="cover">
                <img src="../img/logo.png" height="100" width="100" class="propic">
                <div class="right">
                    <button><a href="edit_account.php">Edit account</a></button>
                </div>
                <br>
                <p><?php echo $_SESSION['username'] ?></p>
                <p><?php echo $_SESSION['email'] ?></p>
            </div><br>

            <table class="table" border ="1">
                <tr>
                    <td><b>Order Name</b></td>
                    <td><b>Order ID</b></td> 
                </tr>
                <?php
                    include "../php/config.php";

                    $customerDetails = "SELECT * FROM orders where CID='".$_SESSION['CID']."'";
                    $customerDetailsResult = $conn->query($customerDetails);
                    while($row = mysqli_fetch_array($customerDetailsResult)) {
                        $orderDetials = "SELECT * FROM item where Item_number=(SELECT Item_number from orderitem where OID=".$row['OID'].")";
                        $orderDetialsResult = $conn->query($orderDetials);
                        while($order = mysqli_fetch_array($orderDetialsResult)) {
                            echo "<tr>
                                    <td>".$order['Item_Name']."</td>
                                    <td>".$row['OID']."</td>
                                </tr>";
                        }
                    }
                ?>
            </table>
        </div>
        <div class="bottomBar">
            <div class="footer">
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