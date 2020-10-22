<!DOCTYPE html> 
<html>
    <?php
        session_start();
    ?>
    <head>
        <title>Seller Account</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">   
        <link rel="stylesheet" type="text/css" href="../css/seller.css">   
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
                <form action="../php/logout.php"><button type="submit">SignOut</button></form>
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
                <p><?php echo $_SESSION['username']; ?></p>
                <p><?php echo $_SESSION['email']; ?></p>
            </div><br>
            <table class="table" border ="1">
                <tr>
                    <td><b>Product Name</b></td>
                    <td><b>Description</b></td>
                    <td><b>Quantity</b></td> 
                    <td><b>Unit Price</b></td>  
                </tr>
                <?php
                    include "../php/config.php";

                    $sellerDetails = "SELECT * FROM item where SID='".$_SESSION['SID']."'";
                    $sellerDetailsResult = $conn->query($sellerDetails);
                    while($row = mysqli_fetch_array($sellerDetailsResult)) {
                        echo "<tr>
                                <td>".$row['Item_Name']."</td>
                                <td>".$row['Description']."</td>
                                <td>".$row['Quantity']."</td>
                                <td>".$row['Unit_Price']."</td>";
                    }
                ?>
            </table>
            <div>
                <form>
                    <label for="pname">Product Name </label>
                    <input type="text" id="pname" name="pname" size="48" Required><br><br>

                    <label for="desc">Description </label>
                    <input type="text" id="desc" name="desc" size="48" Required><br><br>

                    
                    <label for="pr">Unit price </label>
                    <input type="text" id="pr" name="pr" size="48" Required><br><br>
                    

                    <label for="quan">Quantitty </label>
                    <input type="text" id="quan" name="quan" size="48" Required><br><br>

                    <label for="category">Category </label>
                    <select name="category" id="category">
                        <option value="Electronics">Electronics</option>
                        <option value="Jewelry & Watches">Jewelry & Watches</option>
                        <option value="Sports">Sports</option>
                        <option value="Men's Fassion">Men's Fassion</option>
                        <option value="Women's Fassion">Women's Fassion</option>
                        <option value="Household Items">Household Items</option>
                        <option value="Toys">Toys</option>
                        <option value="Tools">Tools</option>
                        <option value="Beauty">Beauty</option>
                        <option value="Hair">Hair</option>
                        <option value="Fitness">Fitness</option>
                        <option value="Shoes">Shoes</option>
                        
                    </select><br><br>
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*"><br><br>

                    <div style="text-align: center;">
                        <button type="submit" id="submitc">Submit</button>
                    </div>
                </form>
            </div>
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
    <script src="../js/js1.js"></script>  
</html>